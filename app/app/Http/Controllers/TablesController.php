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
class TablesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->rol === 'Mesero' || Auth::user()->rol === 'Gerente') {
            $employee = DB::table('wok_employee')
                ->where('email','=',Auth::user()->email)
            ->first();
            $franchise = DB::table('wok_restaurant as wr')
                ->join('wok_franchise as wf','wf.id_franchise','=','wr.franquicia')
                ->where('wr.id_restaurant','=',$employee->restaurante)
            ->first();
            if(Auth::user()->rol === 'Mesero'){
                $franchise->tables = DB::table('wok_table')
                    ->where('estado_eliminado','<>','0')
                    ->where('servicio','=','MS')
                    ->where('restaurante','=',$franchise->id_restaurant)
                ->get();
            }else{
                $franchise->tables = DB::table('wok_table')
                    ->where('estado_eliminado','<>','0')
                    ->where('restaurante','=',$franchise->id_restaurant)
                ->get();
            }
            foreach ($franchise->tables as $key => $table) {
                switch ($table->estado) {
                    case '0'://Estado libre
                        $table->state = 'Libre';
                        break;
                    case '1'://Estado ocupado en proceso de preparacion
                        $table->state = 'Ocupada';
                        break;
                    case '2'://Estado ocupado entregado
                        $table->state = 'Entregado';
                        break;
                    case '3'://Estado ocupado entregado con orden adicional en preparacion
                        $table->state = 'Entregado con orden adicional en preparación';
                        break;
                    default:
                        # code...
                        break;
                }
                switch ($table->servicio) {
                    case 'MS'://Estado libre
                        $table->service = 'MESA';
                        break;
                    case 'LV'://Estado ocupado en proceso de preparacion
                        $table->service = 'PARA LLEVAR';
                        break;
                    case 'DC'://Estado ocupado entregado
                        $table->service = 'ADOMICILIO';
                        break;
                    default:
                        # code...
                        break;
                }
            }
            return view("tables.index", compact('franchise'));
        }else if(Auth::user()->rol === 'Propietario' ){
            $owner = DB::table('wok_owner')
                ->where('email','=',Auth::user()->email)
            ->first();
            $franchises = DB::table('wok_franchise as wf')
                ->join('wok_restaurant as wr','wr.franquicia','=','wf.id_franchise')
                ->where('wf.owner','=',$owner->id_owner)
            ->get();
            foreach ($franchises as $key => $franchise) {
                $franchise->tables = DB::table('wok_table')
                    ->where('estado_eliminado','<>','0')
                    ->where('restaurante','=',$franchise->id_restaurant)
                ->get();
                foreach ($franchise->tables as $key => $table) {
                    switch ($table->estado) {
                        case '0'://Estado libre
                            $table->state = 'Libre';
                            break;
                        case '1'://Estado ocupado en proceso de preparacion
                            $table->state = 'En preparación';
                            break;
                        case '2'://Estado ocupado entregado
                            $table->state = 'Entregado';
                            break;
                        case '3'://Estado ocupado entregado con orden adicional en preparacion
                            $table->state = 'Entregado con orden adicional en preparación';
                            break;
                        default:
                            # code...
                            break;
                    }
                    switch ($table->servicio) {
                        case 'MS'://Estado libre
                            $table->service = 'MESA';
                            break;
                        case 'LV'://Estado ocupado en proceso de preparacion
                            $table->service = 'PARA LLEVAR';
                            break;
                        case 'DC'://Estado ocupado entregado
                            $table->service = 'ADOMICILIO';
                            break;
                        default:
                            # code...
                            break;
                    }
                }    
            }
            return view("tables.index", compact('franchises'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createTable($id)
    {
        $id_restaurant = $id;
        /*$owner = DB::table('wok_owner')
            ->where('email','=',Auth::user()->email)
        ->first();
        $franchises = DB::table('wok_franchise')
            ->where('owner','=',$owner->id_owner)
        ->get();*/
        //dd($franchises);
        return view("tables.create", compact('id_restaurant'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $table = new Table;
        $table->nombre = $request->nombre;
        $table->estado = '0';
        $table->restaurante = $request->id_restaurant;
        $table->servicio = $request['inline-form-radio'];
        $table->estado_eliminado = '1';
        $table->save();
        $log = [
            'desc'=>'Ingreso un nueva mesa',
            'email'=>\Auth::user()->email,
        ];
        Log::create($log);

        return Redirect::to('/tables');
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

    public function getPersonNit(Request $request){
        if($request->id != 'C/F' && $request->id != 'C.F' && $request->id != 'CF'){
            $cliente = Cliente::whereRaw('replace(nit_cliente,\'-\',\'\') = '.str_replace("-", "", $request->id))->first();
            if($cliente->nombre != null){
                return $cliente;
            }else{
                return null;
            }
        }else{
            return null;
        }
    }

    public function deleteTable(Request $request)
    {
        $table = Table::find($request->id);
        $table->estado_eliminado = "0";
        $table->save();
        $log = [
            'desc'=>'Elimino la mesa con id: '.$request->id,
            'email'=>\Auth::user()->email,
            ];
        Log::create($log);
        return 'Mesa eliminado';
    }

    public function getBills($id)
    {
        $id_table = $id;
        $bills = DB::table('wok_pedido as wp')
            ->join('wok_bill as wb','wb.pedido','=','wp.id_pedido')
            ->where('wp.table','=',$id_table)
            ->where('wp.estado','=',0)
        ->get();
        foreach ($bills as $key => $bill) {
            $bill->details = null;
            $bill->details = DB::table('wok_details_bill as wdb')
                ->where('wdb.bill','=',$bill->id_bill)
            ->get();
            foreach ($bill->details as $k => $detail) {
                if ($detail->estado === '0') {
                    $detail->state = 'En preparación';
                }else if ($detail->estado === '1'){
                    $detail->state = 'Entregado';
                }else if ($detail->estado === '3'){
                    $detail->state = 'Listo';
                }
            }
        }
        //dd($bills);
        $employee = DB::table('wok_employee')
                ->where('email','=',Auth::user()->email)
            ->first();
        $franchise = DB::table('wok_restaurant as wr')->select('wt.descripcion_franquicia as dsc')
                ->join('wok_franchise as wf','wf.id_franchise','=','wr.franquicia')
                ->join('wok_type_franchise as wt','wf.type_franquicia','=','wt.id_type_franchise')
                ->where('wr.id_restaurant','=',$employee->restaurante)
                ->first();
            $cliente = Cliente::find($bills[0]->cliente);
        return view("tables.bills", compact('bills','id_table','franchise','cliente'));
    }

    public function changeDetailStatus(Request $request)
    {
        $detail_bill = DetailsBill::find($request->id);
        $detail_bill->estado = $request->status;
        $detail_bill->save();
        return 'Actualización exitosa';
    }

    public function changeTableStatus(Request $request)
    {
        $pedidos = json_decode($request->pedidos);
        $table = Table::find($request->id);
        $table->estado = $request->status;//Estatus 0 para desocupar la mesa
        $table->save();

        foreach ($pedidos as $key => $pedido) {
            $ped = Pedido::find($pedido);
            $ped->estado = '1';// pedido inactivo
            $ped->save();
        }

        return 'Mesa liberada';
    }

    public function payBill(Request $request)
    {
        //dd($request->all());
        //$bill = Bill::find($request->id_bill);
        //dd($bill);
        $details = DB::table('wok_details_bill as wdb')
            ->where('wdb.bill','=',$request->id_bill)
        ->get();
        
        $total = 0;
        foreach ($details as $key => $item) {
            $total+= ($item->precio_unitario * $item->cantidad);
        }
        //dd($total);
        $id_bill = $request->id_bill;
        $id_table = $request->id_table;
        $id_pedido = $request->id_pedido;
        $pedido = Pedido::find($id_pedido);
        if($pedido->cliente>1){
            $cliente = Cliente::find($pedido->cliente);
            return view("delivery.pay", compact('id_bill','id_table','id_pedido','details','total','cliente'));
        }else{
            return view("tables.pay", compact('id_bill','id_table','id_pedido','details','total'));
        }
    }

    public function sellBill(Request $request)
    {
        //dd($request->all());
        $ped = Pedido::find($request->id_pedido);
        $ped->estado = '1';// pedido inactivo
        if ($request['inline-form-radio'] === 'C/F') {
            # Generar factura para C/F
        } else {
            # Generar registro para compra con NIT
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
        }

        $pedidos = DB::table('wok_details_bill as wdb')
            ->where('wdb.bill','=',$request->id_bill)
        ->get();
        //dd($pedidos);

        $bill = Bill::where('pedido','=',$request->id_pedido)->first();
        $bill->tipo_pago = $request->tipopago;
        $bill->save();
        
        $table = Table::find($request->id_table);
        $table->estado = 0;//Estatus 0 para desocupar la mesa
        $table->save();

       
        $ped->save();
        
        return Redirect::to('/tables');
    }

}
