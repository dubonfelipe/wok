<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Session;
use Redirect;

use DB;
use App\Franchise;
use App\Restaurant;
use App\Payments;
use App\Log;
use App\Pedido;
use App\DetailsBill;
class OrdenesViewController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public static function getMesES($mes){
        if ($mes == "January") $mes = "Enero";
        if ($mes == "February") $mes = "Febrero";
        if ($mes == "March") $mes = "Marzo";
        if ($mes == "April") $mes = "Abril";
        if ($mes == "May") $mes = "Mayo";
        if ($mes == "June") $mes = "Junio";
        if ($mes == "July") $mes = "Julio";
        if ($mes == "August") $mes = "Agosto";
        if ($mes == "September") $mes = "Setiembre";
        if ($mes == "October") $mes = "Octubre";
        if ($mes == "November") $mes = "Noviembre";
        if ($mes == "December") $mes = "Diciembre";
        return $mes;
    }

    public static function getBeforeMesES($mes){
        if ($mes == 1) $mes = "Enero";
        if ($mes == 2) $mes = "Febrero";
        if ($mes == 3) $mes = "Marzo";
        if ($mes == 4) $mes = "Abril";
        if ($mes == 5) $mes = "Mayo";
        if ($mes == 6) $mes = "Junio";
        if ($mes == 7) $mes = "Julio";
        if ($mes == 8) $mes = "Agosto";
        if ($mes == 9) $mes = "Setiembre";
        if ($mes == 10) $mes = "Octubre";
        if ($mes == 11) $mes = "Noviembre";
        if ($mes == 12) $mes = "Diciembre";
        return $mes;
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
        $mes = $this->getMesES($mes);
        $anio = $dia." ".$mes." de ".strftime("%Y");
        
        $ordenes = Pedido::select('wok_pedido.id_pedido as id','wok_pedido.estado as estado','wok_table.servicio as servicio','wok_bill.id_bill as bill',
                            DB::raw('DATE_FORMAT(wok_pedido.created_at, \'%d/%m/%Y %H:%i\') as date'),
                            'wok_pedido.table as total', 'wok_cliente.nombre as cliente')
                            ->join('wok_table','wok_pedido.table','=','wok_table.id_table')
                            ->join('wok_bill','wok_pedido.id_pedido','=','wok_bill.pedido')
                            ->join('wok_cliente','wok_pedido.cliente','=','wok_cliente.id_cliente')
                            ->join('wok_restaurant','wok_pedido.restaurante','=','wok_restaurant.id_restaurant')
                            ->join('wok_employee','wok_restaurant.id_restaurant','=','wok_employee.restaurante')
                            ->where('wok_employee.email','=',\Auth::user()->email)
                            ->whereRaw('DAY(wok_pedido.created_at) = '.date("d").' and MONTH(wok_pedido.created_at) = '.date("m").' and YEAR(wok_pedido.created_at) = '.date("Y"))
                            ->orderBy('wok_pedido.created_at','ASC')->get();
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
        return view('ordenesview.index', compact('anio','ordenes','totales','detalles','bigTotal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mes_anterior = date('m');
        $mes = $this->getBeforeMesES($mes_anterior);
        $anio = date("Y");
        
        
        $ordenes = Pedido::select('wok_pedido.id_pedido as id','wok_pedido.estado as estado','wok_table.servicio as servicio','wok_bill.id_bill as bill',
                            DB::raw('DATE_FORMAT(wok_pedido.created_at, \'%d/%m/%Y %H:%i\') as date'),
                            'wok_pedido.table as total')
                            ->join('wok_table','wok_pedido.table','=','wok_table.id_table')
                            ->join('wok_bill','wok_pedido.id_pedido','=','wok_bill.pedido')
                            ->join('wok_restaurant','wok_pedido.restaurante','=','wok_restaurant.id_restaurant')
                            ->join('wok_employee','wok_restaurant.id_restaurant','=','wok_employee.restaurante')
                            ->where('wok_employee.email','=',\Auth::user()->email)
                            ->whereRaw('MONTH(wok_pedido.created_at) = '.$mes_anterior.' and YEAR(wok_pedido.created_at) = '.$anio)
                            ->orderBy('wok_pedido.created_at','ASC')->get();
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
        $bigTotal = 0;
        foreach ($totales as $key => $item) {
            $bigTotal+= $item;
        }
        $meses = [ 1 => "Enero", "Febrero", "Marzo", "Abril", "Mayo","Junio", "Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];
        $anios = [];
        for ($i=2020; $i <= $anio ; $i++) { 
            
            array_push($anios,$i);
        }
        if($mes_anterior == 1){
            $anio = $anio - 1;
        }
        
        return view('ordenesview.before', compact('meses','anios','mes','anio','mes_anterior','ordenes','totales','detalles','bigTotal'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mes_anterior =$request['mes'];
        $mes = $this->getBeforeMesES($mes_anterior);
        $anio = $request['anio'];
        $ordenes = Pedido::select('wok_pedido.id_pedido as id','wok_pedido.estado as estado','wok_table.servicio as servicio','wok_bill.id_bill as bill',
                            DB::raw('DATE_FORMAT(wok_pedido.created_at, \'%d/%m/%Y %H:%i\') as date'),
                            'wok_pedido.table as total')
                            ->join('wok_table','wok_pedido.table','=','wok_table.id_table')
                            ->join('wok_bill','wok_pedido.id_pedido','=','wok_bill.pedido')
                            ->join('wok_restaurant','wok_pedido.restaurante','=','wok_restaurant.id_restaurant')
                            ->join('wok_employee','wok_restaurant.id_restaurant','=','wok_employee.restaurante')
                            ->where('wok_employee.email','=',\Auth::user()->email)
                            ->whereRaw('MONTH(wok_pedido.created_at) = '.$mes_anterior.' and YEAR(wok_pedido.created_at) = '.$anio)
                            ->orderBy('wok_pedido.created_at','ASC')->get();
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
        $bigTotal = 0;
        foreach ($totales as $key => $item) {
            $bigTotal+= $item;
        } 
        $meses = [ 1 => "Enero", "Febrero", "Marzo", "Abril", "Mayo","Junio", "Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];
        $anios = [];
        for ($i=2020; $i <= $anio ; $i++) { 
            array_push($anios,$i);
        }
        return view('ordenesview.before', compact('meses','anios','mes','anio','mes_anterior','ordenes','totales','detalles','bigTotal'));
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
