<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Session;
use Redirect;

use DB;
use App\CorteCaja;
use App\Log;
use App\DetailsBill;
use App\Payments;
use App\Owner;
use Mail;
class CorteCajaController extends Controller
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
            $corte = CorteCaja::where('restaurante','=',$franchise->id_restaurant)
                ->whereRaw('DAY(created_at) = '.date("d").' and MONTH(created_at) = '.date("m").' and YEAR(created_at) = '.date("Y"))->first();
        if($corte->cierre_ef != null){
            $ventasef = DetailsBill::select(DB::raw('concat(wok_details_bill.cantidad,\' \',wok_details_bill.descripcion) as dsc'),
            DB::raw('wok_details_bill.cantidad * wok_details_bill.precio_unitario as ef'))
            ->join('wok_bill','wok_details_bill.bill','=','wok_bill.id_bill')
            ->join('wok_pedido','wok_bill.pedido','=','wok_pedido.id_pedido')
            ->where('wok_pedido.restaurante','=',$franchise->id_restaurant)
            ->where('wok_bill.tipo_pago','=','EF')
            ->whereRaw('DAY(wok_details_bill.created_at) = '.date("d").' and MONTH(wok_details_bill.created_at) = '.date("m").' and YEAR(wok_details_bill.created_at) = '.date("Y"))->get();

            $ventastj = DetailsBill::select(DB::raw('concat(wok_details_bill.cantidad,\' \',wok_details_bill.descripcion) as dsc'),
            DB::raw('wok_details_bill.cantidad * wok_details_bill.precio_unitario as tj'))
            ->join('wok_bill','wok_details_bill.bill','=','wok_bill.id_bill')
            ->join('wok_pedido','wok_bill.pedido','=','wok_pedido.id_pedido')
            ->where('wok_pedido.restaurante','=',$franchise->id_restaurant)
            ->where('wok_bill.tipo_pago','=','TJ')
            ->whereRaw('DAY(wok_details_bill.created_at) = '.date("d").' and MONTH(wok_details_bill.created_at) = '.date("m").' and YEAR(wok_details_bill.created_at) = '.date("Y"))->get();
            
            $pagos = Payments::select('descripcion as dsc','monto as ef')
                    ->where('wok_payments.restaurante','=',$franchise->id_restaurant)
                    ->whereRaw('DAY(wok_payments.created_at) = '.date("d").' and MONTH(wok_payments.created_at) = '.date("m").' and YEAR(wok_payments.created_at) = '.date("Y"))->get();

             
            
        }
        return view("caja.index", compact('corte','ventasef', 'ventastj', 'pagos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('caja.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employee = DB::table('wok_employee')
                ->where('email','=',Auth::user()->email)
                ->first();
            $franchise = DB::table('wok_restaurant as wr')
                ->join('wok_franchise as wf','wf.id_franchise','=','wr.franquicia')
                ->where('wr.id_restaurant','=',$employee->restaurante)
                ->first();
        $caja = new CorteCaja;
        $caja->ef_caja = $request['efcaja'];
        $caja->restaurante = $franchise->id_restaurant;
        $caja->save();

        $log = [
            'desc'=>'Ingreso monto de caja '.date("Y-m-d H:i:s:u"),
            'email'=>\Auth::user()->email,
            ];
            Log::create($log);
            Session::flash('message','Monto en efectivo de caja ingresado correctamente');
        return view('home');
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
            $franchise = DB::table('wok_restaurant as wr')
                ->join('wok_franchise as wf','wf.id_franchise','=','wr.franquicia')
                ->where('wr.id_restaurant','=',$employee->restaurante)
                ->first();
        $corte = CorteCaja::find($id);
        $ventasef = DetailsBill::select(DB::raw('concat(wok_details_bill.cantidad,\' \',wok_details_bill.descripcion) as dsc'),
            DB::raw('wok_details_bill.cantidad * wok_details_bill.precio_unitario as ef'))
            ->join('wok_bill','wok_details_bill.bill','=','wok_bill.id_bill')
            ->join('wok_pedido','wok_bill.pedido','=','wok_pedido.id_pedido')
            ->where('wok_pedido.restaurante','=',$franchise->id_restaurant)
            ->where('wok_bill.tipo_pago','=','EF')
            ->whereRaw('DAY(wok_details_bill.created_at) = '.date("d").' and MONTH(wok_details_bill.created_at) = '.date("m").' and YEAR(wok_details_bill.created_at) = '.date("Y"))->get();

            $ventastj = DetailsBill::select(DB::raw('concat(wok_details_bill.cantidad,\' \',wok_details_bill.descripcion) as dsc'),
            DB::raw('wok_details_bill.cantidad * wok_details_bill.precio_unitario as tj'))
            ->join('wok_bill','wok_details_bill.bill','=','wok_bill.id_bill')
            ->join('wok_pedido','wok_bill.pedido','=','wok_pedido.id_pedido')
            ->where('wok_pedido.restaurante','=',$franchise->id_restaurant)
            ->where('wok_bill.tipo_pago','=','TJ')
            ->whereRaw('DAY(wok_details_bill.created_at) = '.date("d").' and MONTH(wok_details_bill.created_at) = '.date("m").' and YEAR(wok_details_bill.created_at) = '.date("Y"))->get();
            $totalEfectivoVentas = 0;
            $totalTarjetaVentas = 0;
            foreach ($ventasef as $item) {
                # code...
                $totalEfectivoVentas += $item->ef;
            }
            foreach ($ventastj as $item) {
                # code...
                $totalTarjetaVentas += $item->tj;
            }
            $pagos = Payments::select('descripcion as dsc','monto as ef')
                    ->where('wok_payments.restaurante','=',$franchise->id_restaurant)
                    ->whereRaw('DAY(wok_payments.created_at) = '.date("d").' and MONTH(wok_payments.created_at) = '.date("m").' and YEAR(wok_payments.created_at) = '.date("Y"))->get();
                    
            $totalPagos = 0;
            foreach ($pagos as $item) {
                # code...
                $totalPagos += $item->ef;
            }
        
            $corte->cierre_ef = $totalEfectivoVentas + $corte->ef_caja - $totalPagos;
            $corte->cierre_tj = $totalTarjetaVentas;
            $corte->fecha_cierre = date("Y-m-d H:i:s:u");
            $corte->usr = $employee->primer_nombre.' '.$employee->primer_apellido;
            $corte->save();

        return Redirect::to('/corteCaja');
    }

    public function sendCorte(){
        
        $employee = DB::table('wok_employee')
                ->where('email','=',Auth::user()->email)
                ->first();
            $franchise = DB::table('wok_restaurant as wr')
                ->join('wok_franchise as wf','wf.id_franchise','=','wr.franquicia')
                ->where('wr.id_restaurant','=',$employee->restaurante)
                ->first();
            $corte = CorteCaja::where('restaurante','=',$franchise->id_restaurant)
                ->whereRaw('DAY(created_at) = '.date("d").' and MONTH(created_at) = '.date("m").' and YEAR(created_at) = '.date("Y"))->first();
        if($corte->cierre_ef != null){
            $ventasef = DetailsBill::select(DB::raw('concat(wok_details_bill.cantidad,\' \',wok_details_bill.descripcion) as dsc'),
            DB::raw('wok_details_bill.cantidad * wok_details_bill.precio_unitario as ef'))
            ->join('wok_bill','wok_details_bill.bill','=','wok_bill.id_bill')
            ->join('wok_pedido','wok_bill.pedido','=','wok_pedido.id_pedido')
            ->where('wok_pedido.restaurante','=',$franchise->id_restaurant)
            ->where('wok_bill.tipo_pago','=','EF')
            ->whereRaw('DAY(wok_details_bill.created_at) = '.date("d").' and MONTH(wok_details_bill.created_at) = '.date("m").' and YEAR(wok_details_bill.created_at) = '.date("Y"))->get();

            $ventastj = DetailsBill::select(DB::raw('concat(wok_details_bill.cantidad,\' \',wok_details_bill.descripcion) as dsc'),
            DB::raw('wok_details_bill.cantidad * wok_details_bill.precio_unitario as tj'))
            ->join('wok_bill','wok_details_bill.bill','=','wok_bill.id_bill')
            ->join('wok_pedido','wok_bill.pedido','=','wok_pedido.id_pedido')
            ->where('wok_pedido.restaurante','=',$franchise->id_restaurant)
            ->where('wok_bill.tipo_pago','=','TJ')
            ->whereRaw('DAY(wok_details_bill.created_at) = '.date("d").' and MONTH(wok_details_bill.created_at) = '.date("m").' and YEAR(wok_details_bill.created_at) = '.date("Y"))->get();
            
            $pagos = Payments::select('descripcion as dsc','monto as ef')
                    ->where('wok_payments.restaurante','=',$franchise->id_restaurant)
                    ->whereRaw('DAY(wok_payments.created_at) = '.date("d").' and MONTH(wok_payments.created_at) = '.date("m").' and YEAR(wok_payments.created_at) = '.date("Y"))->get();
        }
        $emailowner = Owner::select('wok_owner.email as email','wok_franchise.direccion_franquicia as direccion', 'wok_type_franchise.descripcion_franquicia as tipoFranquicia')
                        ->join('wok_franchise','wok_franchise.owner','=','wok_owner.id_owner')
                        ->join('wok_type_franchise','wok_type_franchise.id_type_franchise','=','wok_franchise.type_franquicia')
                        ->join('wok_restaurant','wok_restaurant.franquicia','=','wok_franchise.id_franchise')
                        ->where('wok_restaurant.id_restaurant','=',$franchise->id_restaurant)->first();
        $emailTo = $emailowner->email;
        $direccion = $emailowner->direccion;
        $tipo_franquicia = $emailowner->tipoFranquicia;
        Mail::send('mail.cortecaja',['corte'=>$corte,'ventasef'=>$ventasef,'ventastj'=>$ventastj,'pagos'=>$pagos,'direccion'=>$direccion,'tipo_franquicia'=>$tipo_franquicia], function($msj) use($emailTo){
            $msj->subject('Cuenta creada [WOK - DO Software]');
            $msj->to($emailTo);
        });
        Mail::send('mail.cortecaja',['corte'=>$corte,'ventasef'=>$ventasef,'ventastj'=>$ventastj,'pagos'=>$pagos,'direccion'=>$direccion,'tipo_franquicia'=>$tipo_franquicia], function($msj) use($emailTo){
            $msj->subject('Cuenta creada [WOK - DO Software]');
            $msj->to('dosofware@gmail.com');
        });
        Session::flash('message','Mensaje enviado correctamente');
        return Redirect::to('/corteCaja');
    }

    public function getReport(){
        $employee = DB::table('wok_employee')
                ->where('email','=',Auth::user()->email)
                ->first();
            $franchise = DB::table('wok_restaurant as wr')
                ->join('wok_franchise as wf','wf.id_franchise','=','wr.franquicia')
                ->where('wr.id_restaurant','=',$employee->restaurante)
                ->first();
            $corte = CorteCaja::where('restaurante','=',$franchise->id_restaurant)
                ->whereRaw('DAY(created_at) = '.date("d").' and MONTH(created_at) = '.date("m").' and YEAR(created_at) = '.date("Y"))->first();
        if($corte->cierre_ef != null){
            $ventasef = DetailsBill::select(DB::raw('concat(wok_details_bill.cantidad,\' \',wok_details_bill.descripcion) as dsc'),
            DB::raw('wok_details_bill.cantidad * wok_details_bill.precio_unitario as ef'))
            ->join('wok_bill','wok_details_bill.bill','=','wok_bill.id_bill')
            ->join('wok_pedido','wok_bill.pedido','=','wok_pedido.id_pedido')
            ->where('wok_pedido.restaurante','=',$franchise->id_restaurant)
            ->where('wok_bill.tipo_pago','=','EF')
            ->whereRaw('DAY(wok_details_bill.created_at) = '.date("d").' and MONTH(wok_details_bill.created_at) = '.date("m").' and YEAR(wok_details_bill.created_at) = '.date("Y"))->get();

            $ventastj = DetailsBill::select(DB::raw('concat(wok_details_bill.cantidad,\' \',wok_details_bill.descripcion) as dsc'),
            DB::raw('wok_details_bill.cantidad * wok_details_bill.precio_unitario as tj'))
            ->join('wok_bill','wok_details_bill.bill','=','wok_bill.id_bill')
            ->join('wok_pedido','wok_bill.pedido','=','wok_pedido.id_pedido')
            ->where('wok_pedido.restaurante','=',$franchise->id_restaurant)
            ->where('wok_bill.tipo_pago','=','TJ')
            ->whereRaw('DAY(wok_details_bill.created_at) = '.date("d").' and MONTH(wok_details_bill.created_at) = '.date("m").' and YEAR(wok_details_bill.created_at) = '.date("Y"))->get();
            
            $pagos = Payments::select('descripcion as dsc','monto as ef')
                    ->where('wok_payments.restaurante','=',$franchise->id_restaurant)
                    ->whereRaw('DAY(wok_payments.created_at) = '.date("d").' and MONTH(wok_payments.created_at) = '.date("m").' and YEAR(wok_payments.created_at) = '.date("Y"))->get();
        }
        $emailowner = Owner::select('wok_owner.email as email','wok_franchise.direccion_franquicia as direccion', 'wok_type_franchise.descripcion_franquicia as tipoFranquicia')
                        ->join('wok_franchise','wok_franchise.owner','=','wok_owner.id_owner')
                        ->join('wok_type_franchise','wok_type_franchise.id_type_franchise','=','wok_franchise.type_franquicia')
                        ->join('wok_restaurant','wok_restaurant.franquicia','=','wok_franchise.id_franchise')
                        ->where('wok_restaurant.id_restaurant','=',$franchise->id_restaurant)->first();
        
        $direccion = $emailowner->direccion;
        $tipo_franquicia = $emailowner->tipoFranquicia;
        
        $pdf = \PDF::loadView('report.corte-caja-report', compact('corte','ventasef','ventastj','pagos','direccion','tipo_franquicia'));
        $pdf->setOptions([
            'enable_remote' => true,
            'chroot'  => public_path('storage/'),
        ]);
        //$pdf = \PDF::setOptions(['isHtml5ParserEnabled' => true, 'isRemoteEnabled' => true])->loadView('report.corte-caja-report', compact('corte','ventasef','ventastj','pagos','direccion','tipo_franquicia'));
        return $pdf->download('Corte_Caja_'.str_replace(' ','_',$direccion).'_'.date('Y_m_d').'.pdf');
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
