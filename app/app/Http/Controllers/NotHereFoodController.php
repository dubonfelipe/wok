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
class NotHereFoodController extends Controller
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
                    ->where('wok_table.servicio','=','LV')->first();
        
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
                        Session::flash('message','Servicio de comida para llevar no disponible');
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
        //dd($request->all());
        $ped = Pedido::find($request->id_pedido);
        $ped->estado = '3';// Pedido delivery pagado pero no entregado
        
        if ($request['inline-form-radio'] === 'C/F') {
            # Generar factura para C/F
            
        } else {
            $employee = DB::table('wok_employee')
                ->where('email','=',Auth::user()->email)
            ->first();
            $franchise = DB::table('wok_restaurant as wr')
                ->where('wr.id_restaurant','=',$employee->restaurante)
            ->first();
            if($request['id_cliente']==null){
                $cliente = new Cliente;
                $cliente->nombre = $request['nombre'];
                $cliente->nit_cliente = $request['nit'];
                $cliente->correo = $request['correo'];
                $cliente->dpi = null;
                $cliente->restaurante = $franchise->id_restaurant;
                $cliente->save();
                $ped->cliente = $cliente->id_cliente;
            }else{
                $ped->cliente = $request['id_cliente'];
            }
            # Generar registro para compra con NIT
        }

        $ped->save();    

        $bill = Bill::where('pedido','=',$request->id_pedido)->first();
        $bill->tipo_pago = $request->tipopago;
        $bill->save();

        $table = Table::find($request->id_table);
        $table->estado = 0;//Estatus 0 para desocupar la mesa
        $table->save();
        Session::flash('message','Pago de pedido a domicilio realizado');
        
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
        $pedido = Pedido::find($id);
        
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
        
        return view("delivery.payN", compact('id_bill','id_table','id_pedido','details','total'));
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
