<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Session;
use Redirect;

use DB;
use App\Cliente;
use App\ContactoCliente;
use App\Locations;
use App\Log;
use App\Pedido;
use App\Bill;
class LocacionesController extends Controller
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
        try{
        $direccion = $request['direccion'];
        if($request['direccion']=='nu'){
            $localidad = new Locations;
            $localidad->direccion = $request['direccionnew'];
            $localidad->cliente = $request['cliente'];
            $localidad->save();
            $direccion = $request['direccionnew'];
        }
        $pedido = Pedido::find($request['pedido']);
        $pedido->cliente = $request['cliente'];
        $pedido->dirrecion_pedido = $direccion;
        $pedido->save();
        $id_bill = Bill::where('pedido','=',$pedido->id_pedido)->first();
        $id_bill = $id_bill->id_bill;
        $id_table = $pedido->table;
        $id_pedido = $pedido->id_pedido;
        $details = DB::table('wok_details_bill as wdb')
            ->where('wdb.bill','=',$id_bill)
        ->get();
        
        $total = 0;
        foreach ($details as $key => $item) {
            $total+= ($item->precio_unitario * $item->cantidad);
        }
        
        $cliente = Cliente::find($request['cliente']);
        $employee = DB::table('wok_employee')
                ->where('email','=',Auth::user()->email)
            ->first();
        $franchise = DB::table('wok_restaurant as wr')->select('wt.descripcion_franquicia as dsc')
                ->join('wok_franchise as wf','wf.id_franchise','=','wr.franquicia')
                ->join('wok_type_franchise as wt','wf.type_franquicia','=','wt.id_type_franchise')
                ->where('wr.id_restaurant','=',$employee->restaurante)
                ->first();
            if($franchise->dsc === 'Brasas y leñas'){
                return Redirect::to(route('tables.index'));
            }else{
                return view("delivery.pay", compact('id_bill','id_table','id_pedido','details','total','cliente'));
            }
        }
        catch(\Illuminate\Database\QueryException $ex){ 
            dd($ex);
            Session::flash('message','Error de ingreso de pedido');
            return $this->create();
        } 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pos = strpos($id, '&');
        $cliente = substr($id, 0, $pos);
        $pedido = substr($id,$pos+1);
        $localidadescliente = Locations::where('cliente','=',$cliente)->get();
        return view('clienteSearch.localidades', compact('cliente','pedido','localidadescliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = Cliente::find($id);
        return view('locaciones.edit', compact('cliente'));
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
        try{
            
            $locaciones = new Locations;
            $locaciones->direccion = $request['direccion'];
            $locaciones->cliente = $id;
            $locaciones->save();
            $log = [
                'desc'=>'Ingreso una nueva direccion '.$locaciones->id_locations.' para el cliente '.$id,
                'email'=>\Auth::user()->email,
                ];
                Log::create($log);
            return  Redirect::to('/clientes');

        }catch(\Illuminate\Database\QueryException $ex){ 
            dd($ex);
            Session::flash('message','Error de ingreso de cliente');
            return $this->create();
        } 
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
