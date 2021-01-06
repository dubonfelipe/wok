<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Session;
use Redirect;

use DB;
use App\Pedido;
use App\Table;
use App\Bill;
use App\ObjectSat\PutFrases;
use App\ObjectSat\DetalleFact;
use App\ObjectSat\Signer;
use App\Log;
use App\DetailsBill;

use Selective\XmlDSig\XmlSignatureValidator;

class DeliveryPayController extends Controller
{
    public function __construct()
	 {
	 	$this->middleware('auth');
	 }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {           
        $ped = Pedido::find($request->id_pedido);
        $bill = Bill::where('pedido','=',$request->id_pedido)->first();
        $details = DB::table('wok_details_bill as wdb')
            ->where('wdb.bill','=',$bill->id_bill)
        ->get();
        $total = 0;
        foreach ($details as $key => $item) {
            $total+= ($item->precio_unitario * $item->cantidad);
        }
        
        /**
         * Proceso de XML y Firma
         */
        $time_stamp = date("Y-m-d")."T".date("H:i:s")."-06:00";
        $dom_xml = new \DOMDocument;
        $dom_xml->preserveWhiteSpace = FALSE;
        $dom_xml->load(asset('xml').'/factura.xml');

        $escenario = array(1);
        $frase = array(1);

        $frasesXml = new PutFrases($dom_xml,$escenario,$frase);
        $frasesXml->aggFrases();

        $detalleItems = new DetalleFact($dom_xml,$details,$total);
        $detalleItems->aggItems();
        
        $signos = array('-','.',':',' ');
        $dir = 'wokeate/';
        $dirSigned = 'signed/';
        $dateflat = str_replace($signos, "", $time_stamp);

        $signer = new Signer($dir,$dateflat,$dom_xml,$dirSigned);
        $key_url = base_path('keys').'/85082929-4e44b2af385c1fa1.pfx';
        $key_pass = '30sep_31dic_26may_05Ago';
        $signer->sign($key_url, $key_pass);

        //dd($dom_xml);
        $pedidos = DB::table('wok_details_bill as wdb')
            ->where('wdb.bill','=',$request->id_bill)
        ->get();
        //dd($pedidos);
        $ped->estado = '3';// Pedido delivery pagado pero no entregado
        $ped->save();

        $bill->tipo_pago = $request->tipopago;
        $bill->save();

        $table = Table::find($request->id_table);
        $table->estado = 0;//Estatus 0 para desocupar la mesa
        $table->save();
        Session::flash('message','Pago de pedido realizado');
        return Redirect::to('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
