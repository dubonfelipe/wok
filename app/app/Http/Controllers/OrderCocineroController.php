<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Session;
use Redirect;

use DB;
use App\DetailsBill;
use App\Restaurant;
use App\Franchise;
use App\Bill;
use App\Employee;
class OrderCocineroController extends Controller
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
        $menu = DetailsBill::select('wok_details_bill.id_details_bill as id','wok_pedido.id_pedido as pedidoId','wok_details_bill.descripcion as dsc','wok_details_bill.cantidad as cantidad',
                        DB::raw('replace(wok_receta.descripcion_proceso,\'\r\n\',\'\') as receta'), 'wok_receta.tiempo_preparacion as tiempo',
                        DB::raw('(SELECT GROUP_CONCAT(wok_ingrediente.nombre_ingrediente separator \'**\') from wok_ingrediente
                        INNER JOIN wok_receta on wok_receta.id_receta = wok_ingrediente.receta
                        WHERE wok_receta.menu = wok_details_bill.idmenu) as ingredientes'),
                        DB::raw('DATE_FORMAT(wok_details_bill.created_at, \'%d/%m/%Y %H:%i\') as date'))
                            ->join('wok_bill','wok_bill.id_bill','=','wok_details_bill.bill')
                            ->join('wok_pedido','wok_pedido.id_pedido','=','wok_bill.pedido')
                            ->join('wok_receta','wok_receta.menu','=','wok_details_bill.idmenu')
                            ->where('wok_pedido.restaurante','=',$franchise->id_restaurant)
                            ->where('wok_details_bill.estado','=','0')
                            ->orderBy("wok_details_bill.created_at","ASC")->get();
        return view('cocinero.index', compact('menu'));
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
        $employee = DB::table('wok_employee')
                ->where('email','=',Auth::user()->email)
                ->first();
        $detail = DetailsBill::find($id);
        $detail->estado = "3";
        $detail->empleado = $employee->id_employee;
        $detail->save();
        return Redirect::to('/wokers');
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
