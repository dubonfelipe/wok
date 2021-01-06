<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Session;
use Redirect;

use DB;
use App\Log;
use App\Table;
use App\Http\Controllers\OrdersController;
use App\Cliente;
use App\ContactoCliente;
use App\Locations;
use App\Pedido;
use App\Bill;
use App\CorteCaja;
class DeliveryController extends Controller
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
        $idTable = Table::select('wok_table.id_table as id')
                    ->join('wok_restaurant','wok_table.restaurante','=','wok_restaurant.id_restaurant')
                    ->join('wok_employee','wok_restaurant.id_restaurant','=','wok_employee.restaurante')
                    ->where('wok_employee.email','=',\Auth::user()->email)
                    ->where('wok_table.servicio','=','DC')->first();
                    $employee = DB::table('wok_employee')
                ->where('email','=',Auth::user()->email)
                ->first();
            $franchise = DB::table('wok_restaurant as wr')
                ->join('wok_franchise as wf','wf.id_franchise','=','wr.franquicia')
                ->where('wr.id_restaurant','=',$employee->restaurante)
                ->first();
            $regCorte = CorteCaja::select('fecha_cierre as fecha')->where('restaurante','=',$franchise->id_restaurant)
                ->whereRaw('DAY(created_at) = '.date("d").' and MONTH(created_at) = '.date("m").' and YEAR(created_at) = '.date("Y"))->first();
               // dd($regCorte->fecha);
            if($regCorte != null){
                if($regCorte->fecha == null){
                    if($idTable != null){
                        return Redirect::to(route('orders.show',[$idTable->id]));
                    }else{
                        Session::flash('message','Servicio a domicilio no disponible');
                        return Redirect::to('/');
                    }
                }else{return Redirect::to('/start');}
            }else{
                return Redirect::to('/start');
            }
        
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
            $employee = DB::table('wok_employee')
                ->where('email','=',Auth::user()->email)
            ->first();
            $franchise = DB::table('wok_restaurant as wr')
                ->where('wr.id_restaurant','=',$employee->restaurante)
            ->first();
            $pedido = Pedido::find($request['pedido']);
            $cliente = new Cliente;
            $cliente->nombre = $request['cliente'];
            $cliente->nit_cliente = $request['nit'];
            $cliente->correo = $request['email'];
            $cliente->dpi = $request['dpi'];
            $cliente->restaurante = $franchise->id_restaurant;
            $cliente->save();
            $pedido->cliente = $cliente->id_cliente;
            if($request['cel']!=null){
                $contacto = new ContactoCliente;
                $contacto->cliente = $cliente->id_cliente;
                $contacto->telefono = $request['cel'];
                $contacto->save();
            }

            if($request['direccion']!=null){
                $locacion = new Locations;
                $locacion->cliente = $cliente->id_cliente;
                $locacion->direccion = $request['direccion'];
                $locacion->save();
                $pedido->dirrecion_pedido = $request['direccion'];
            }
            $pedido->save();
            $log = [
                'desc'=>'Ingreso un nuevo cliente '.$cliente->id_cliente,
                'email'=>\Auth::user()->email,
                ];
                Log::create($log);
            
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
        
        $typeF = DB::table('wok_restaurant as wr')->select('wt.descripcion_franquicia as dsc')
                ->join('wok_franchise as wf','wf.id_franchise','=','wr.franquicia')
                ->join('wok_type_franchise as wt','wf.type_franquicia','=','wt.id_type_franchise')
                ->where('wr.id_restaurant','=',$employee->restaurante)
                ->first();
            /*if($typeF->dsc === 'Brasas y leñas'){
                return Redirect::to(route('tables.index'));
            }else{
                return view("delivery.pay", compact('id_bill','id_table','id_pedido','details','total','cliente'));
            }        */
            return view("delivery.pay", compact('id_bill','id_table','id_pedido','details','total','cliente'));
        }catch(\Illuminate\Database\QueryException $ex){ 
            dd($ex);
            Session::flash('message','Error de ingreso de cliente');
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
        $pedido = $id;
        $clientes = Cliente::select('wok_cliente.id_cliente as id','wok_cliente.nombre as cliente','wok_cliente.nit_cliente as nit',
        DB::raw('(SELECT GROUP_CONCAT(CONCAT(wok_contacto.telefono,\'&\',wok_contacto.id_contacto) separator \'**\') from wok_contacto
                where wok_contacto.cliente = wok_cliente.id_cliente) as contactos'))
                ->where('wok_cliente.id_cliente','<>',1)->get();
        return view('clienteSearch.index', compact('pedido','clientes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $pedido = $id;
        return view('clienteSearch.create',compact('pedido'));
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
        return Redirect::to('/');
    }
}
