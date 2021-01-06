<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Session;
use Redirect;

use DB;
use App\Table;
use App\Log;
use App\DetailsBill;
use App\Pedido;
use App\Bill;
use App\Cliente;
use App\Employee;

class DeliveryEmployeePedidosController extends Controller
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
        $mes = strftime("%B");
        $dia = date("d");
        $anio = $dia." ".$mes." de ".strftime("%Y");
        $employee = DB::table('wok_employee')
                ->where('email','=',Auth::user()->email)
            ->first();
        $franchise = DB::table('wok_restaurant as wr')
                ->join('wok_franchise as wf','wf.id_franchise','=','wr.franquicia')
                ->where('wr.id_restaurant','=',$employee->restaurante)
            ->first();
        
        $ordenes = Pedido::select('wok_pedido.id_pedido as id','wok_pedido.estado as estado','wok_bill.id_bill as bill',
                            DB::raw('DATE_FORMAT(wok_pedido.created_at, \'%d/%m/%Y %H:%i\') as date'),
                            'wok_pedido.table as total', 'wok_cliente.nombre as cliente','wok_pedido.dirrecion_pedido as direccion',
                            DB::raw('(SELECT GROUP_CONCAT(wok_contacto.telefono separator \'**\') from wok_contacto
                                    where wok_contacto.cliente = wok_cliente.id_cliente) as contactos'))
                            ->join('wok_table','wok_pedido.table','=','wok_table.id_table')
                            ->join('wok_bill','wok_pedido.id_pedido','=','wok_bill.pedido')
                            ->join('wok_cliente','wok_pedido.cliente','=','wok_cliente.id_cliente')
                            ->where('wok_pedido.restaurante','=',$franchise->id_restaurant)
                            ->where('wok_bill.empleado','=',$employee->id_employee)
                            ->where('wok_table.servicio','=','DC')
                            ->where('wok_pedido.estado','=','3')
                            ->orderBy('id','DESC')->get();
                            
        $detalles = [];
        $totales = [];
        foreach($ordenes as $item){
            $ite_key = $item->id;
            $bill_detalle = DetailsBill::where('wok_details_bill.bill','=',$item->bill)->get();
            $detalles[$ite_key] = $bill_detalle;
            $total = 0;
            foreach ($bill_detalle as $key => $item) {
                $total+= ($item->precio_unitario * $item->cantidad);
            }        
            $totales[$ite_key] = $total;
        }
       //dd($totales);
       $bigTotal = 0;
        foreach ($totales as $key => $item) {
            $bigTotal+= $item;
        }
        return view('deliveryEmployee.index', compact('anio','ordenes','totales','detalles','bigTotal'));
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
        //
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
        $pedido = Pedido::find($id);
        $pedido->estado = 1;
        $pedido->save();
        return Redirect::to('/pedidosDelivery');
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
