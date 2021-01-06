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
use App\Pedido;
use App\Bill;
use App\DetailsBill;
use App\Table;
use DateTime;

class OrdersController extends Controller
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
        $employee = DB::table('wok_employee')
            ->where('email','=',Auth::user()->email)
        ->first();
        $franchise = DB::table('wok_restaurant as wr')
            ->join('wok_franchise as wf','wf.id_franchise','=','wr.franquicia')
            ->where('wr.id_restaurant','=',$employee->restaurante)
        ->first();
        $menu_franchise = DB::table('wok_menu_has_type_franchise as wmhtf')
            ->join('wok_menu as wm','wm.id_menu','=','wmhtf.menu')
            ->join('wok_price as wp','wp.menu','=','wm.id_menu')
            ->where('wmhtf.type_franquicia','=',$franchise->type_franquicia)
            ->where('wp.type_price','=',$franchise->type_price)
        ->get();
        //dd($menu_franchise);
        $categories = DB::table('wok_type_foods as wtf')->get();
        //dd($categories);
        foreach ($categories as $key => $category) {
            $category->plates = [];
            foreach ($menu_franchise as $key => $plate) {
                if ($plate->type_foods == $category->id_type_foods) {
                    array_push($category->plates, $plate);
                }    
            }
        }
        //dd($categories);
        return view("orders.index", compact('categories'));
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
        $detalles = json_decode($request->detalle);
        //$now = new \DateTime();
        //return $detalles;
        //return $request->all();
        $employee = DB::table('wok_employee')
                ->where('email','=',Auth::user()->email)
            ->first();
            $pedido = new Pedido;
            $pedido->estado = '0';//enviado a cocina
            $pedido->cliente = 1;
            $pedido->table = $request->id_table;
            $pedido->restaurante = $employee->restaurante;
            $pedido->save();
            
            $bill = new Bill;
            $bill->estado_impreso = 'No';
            $bill->numero_autorizacion = '1000000000001';
            $bill->serie_documento = 'xxx';
            $bill->numero_documento = '12222';
            $bill->numero_acceso = '23321321';
            $bill->fecha_hora_facturacion = date("Y-m-d H:i:s:u");
            $bill->fecha_hora_certificacion = '2020-10-28';
            $bill->tipo_moneda = 'Q';
            $bill->tipo_pago = 'EF';
            $bill->fel = 2; //Factura normal 
            $bill->pedido = $pedido->id_pedido;
            $bill->empleado = $employee->id_employee;
            $bill->save();
            
            foreach ($detalles as $key => $detalle) {
                $detail = new DetailsBill;
                $detail->descripcion = $detalle->descripcion;
                $detail->cantidad = $detalle->cantidad;
                $detail->precio_unitario = $detalle->monto;
                $detail->estado = '0'; //pedidos activos
                $detail->idmenu = $detalle->id_menu;
                $detail->descuento = 0;
                $detail->impuesto_valor_agregado = 0;
                $detail->bill = $bill->id_bill;
                $detail->empleado = $employee->id_employee;
                $detail->save();
            }
        $tableService = Table::find($request->id_table);
        if($tableService->servicio === 'MS'){

            $table = Table::find($request->id_table);
            $table->estado = '1';//Mesa ocupada
            $table->save();

            $franchise = DB::table('wok_restaurant as wr')->select('wt.descripcion_franquicia as dsc')
                ->join('wok_franchise as wf','wf.id_franchise','=','wr.franquicia')
                ->join('wok_type_franchise as wt','wf.type_franquicia','=','wt.id_type_franchise')
                ->where('wr.id_restaurant','=',$employee->restaurante)
                ->first();
            if($franchise->dsc === 'Brasas y leñas'){
                return route('delivery.show',[$pedido->id_pedido]);
            }else{
            //return 'registro completo';
                return route('tables.index');
            }
        }else if($tableService->servicio === 'DC'){
            return route('delivery.show',[$pedido->id_pedido]);
        }else if($tableService->servicio === 'LV'){
            return route('llevarPay.show',[$pedido->id_pedido]);
        }
    }

    public function storeMore(Request $request)
    {
        $detalles = json_decode($request->detalle);
        $employee = DB::table('wok_employee')
            ->where('email','=',Auth::user()->email)
        ->first();
        
        foreach ($detalles as $key => $detalle) {
            $detail = new DetailsBill;
            $detail->descripcion = $detalle->descripcion;
            $detail->cantidad = $detalle->cantidad;
            $detail->precio_unitario = $detalle->monto;
            $detail->estado = '0'; //pedidos activos
            $detail->idmenu = $detalle->id_menu;
            $detail->descuento = 0;
            $detail->impuesto_valor_agregado = 0;
            $detail->bill = $request->id_bill;
            $detail->empleado = $employee->id_employee;
            $detail->save();
        }
        
        return 'registro completo';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   
        $id_table = $id;
        $employee = DB::table('wok_employee')
            ->where('email','=',Auth::user()->email)
        ->first();
        $franchise = DB::table('wok_restaurant as wr')
            ->join('wok_franchise as wf','wf.id_franchise','=','wr.franquicia')
            ->where('wr.id_restaurant','=',$employee->restaurante)
        ->first();
        $menu_franchise = DB::table('wok_menu_has_type_franchise as wmhtf')
            ->join('wok_menu as wm','wm.id_menu','=','wmhtf.menu')
            ->join('wok_price as wp','wp.menu','=','wm.id_menu')
            ->where('wmhtf.type_franquicia','=',$franchise->type_franquicia)
            ->where('wp.type_price','=',$franchise->type_price)
        ->get();
        //dd($menu_franchise);
        $categories = DB::table('wok_type_foods as wtf')->get();
        //dd($categories);
        foreach ($categories as $key => $category) {
            $category->plates = [];
            foreach ($menu_franchise as $key => $plate) {
                if ($plate->type_foods == $category->id_type_foods) {
                    array_push($category->plates, $plate);
                }    
            }
        }
        //dd($categories);
        $id_bill = null;
        return view("orders.index", compact('categories','id_table','id_bill'));
        
    }

    public function showMorePedido($id, $id_bill)
    {
        $id_table = $id;
        $employee = DB::table('wok_employee')
            ->where('email','=',Auth::user()->email)
        ->first();
        $franchise = DB::table('wok_restaurant as wr')
            ->join('wok_franchise as wf','wf.id_franchise','=','wr.franquicia')
            ->where('wr.id_restaurant','=',$employee->restaurante)
        ->first();
        $menu_franchise = DB::table('wok_menu_has_type_franchise as wmhtf')
            ->join('wok_menu as wm','wm.id_menu','=','wmhtf.menu')
            ->join('wok_price as wp','wp.menu','=','wm.id_menu')
            ->where('wmhtf.type_franquicia','=',$franchise->type_franquicia)
            ->where('wp.type_price','=',$franchise->type_price)
        ->get();
        //dd($menu_franchise);
        $categories = DB::table('wok_type_foods as wtf')->get();
        //dd($categories);
        foreach ($categories as $key => $category) {
            $category->plates = [];
            foreach ($menu_franchise as $key => $plate) {
                if ($plate->type_foods == $category->id_type_foods) {
                    array_push($category->plates, $plate);
                }    
            }
        }
        //dd($categories);
        return view("orders.index", compact('categories','id_table','id_bill'));
        
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
