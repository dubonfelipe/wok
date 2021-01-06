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
use App\Proveedores;
use App\Payments;
use App\Log;
use App\Banco;
class PaymentsController extends Controller
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
    {   $mes = strftime("%B");
        $dia = date("d");
        $mes = $this->getMesES($mes);
        $anio = $dia." ".$mes." de ".strftime("%Y");
           $rol = \Auth::user()->rol;
        if($rol == 'Propietario'){
            $pagos = Payments::select('wok_payments.id_payments as id','wok_payments.descripcion as ds','wok_payments.monto as monto','wok_payments.constante as constante',
                                'wok_proveedores.nombre as proveedor','wok_type_franchise.descripcion_franquicia as franquicia','wok_franchise.direccion_franquicia as direccion')
                                ->join('wok_proveedores','wok_payments.proveedores','=','wok_proveedores.id_proveedores')
                                ->join('wok_restaurant','wok_payments.restaurante','=','wok_restaurant.id_restaurant')
                                ->join('wok_franchise','wok_restaurant.franquicia','=','wok_franchise.id_franchise')
                                ->join('wok_type_franchise','wok_franchise.type_franquicia','=','wok_type_franchise.id_type_franchise')
                                ->join('wok_owner','wok_franchise.owner','=','wok_owner.id_owner')
                                ->where('wok_owner.email','=',\Auth::user()->email)
                                ->whereRaw('DAY(wok_payments.created_at) = '.date("d").' and MONTH(wok_payments.created_at) = '.date("m").' and YEAR(wok_payments.created_at) = '.date("Y"))->get();
        }else{
            $pagos = Payments::select('wok_payments.id_payments as id','wok_payments.descripcion as ds','wok_payments.monto as monto','wok_payments.constante as constante',
                                'wok_proveedores.nombre as proveedor','wok_type_franchise.descripcion_franquicia as franquicia','wok_franchise.direccion_franquicia as direccion')
                                ->join('wok_proveedores','wok_payments.proveedores','=','wok_proveedores.id_proveedores')
                                ->join('wok_restaurant','wok_payments.restaurante','=','wok_restaurant.id_restaurant')
                                ->join('wok_franchise','wok_restaurant.franquicia','=','wok_franchise.id_franchise')
                                ->join('wok_type_franchise','wok_franchise.type_franquicia','=','wok_type_franchise.id_type_franchise')
                                ->join('wok_employee','wok_restaurant.id_restaurant','=','wok_employee.restaurante')
                                ->where('wok_employee.email','=',\Auth::user()->email)
                                ->whereRaw('DAY(wok_payments.created_at) = '.date("d").' and MONTH(wok_payments.created_at) = '.date("m").' and YEAR(wok_payments.created_at) = '.date("Y"))->get();
        }   
        return view('owner.pagos.index', compact('anio','pagos'));
    }

    public function beforePayment(){
        $mes_anterior = date('m');
        $mes = $this->getBeforeMesES($mes_anterior);
        $anio = date("Y");
        
        if(\Auth::user()->rol == 'Propietario'){
            $pagos = Payments::select('wok_payments.id_payments as id',
                                DB::raw('DATE_FORMAT(wok_payments.created_at, \'%d/%m/%Y\') as date'),'wok_payments.descripcion as ds','wok_payments.monto as monto','wok_payments.constante as constante',
                                'wok_proveedores.nombre as proveedor','wok_type_franchise.descripcion_franquicia as franquicia','wok_franchise.direccion_franquicia as direccion')
                                ->join('wok_proveedores','wok_payments.proveedores','=','wok_proveedores.id_proveedores')
                                ->join('wok_restaurant','wok_payments.restaurante','=','wok_restaurant.id_restaurant')
                                ->join('wok_franchise','wok_restaurant.franquicia','=','wok_franchise.id_franchise')
                                ->join('wok_type_franchise','wok_franchise.type_franquicia','=','wok_type_franchise.id_type_franchise')
                                ->join('wok_owner','wok_franchise.owner','=','wok_owner.id_owner')
                                ->where('wok_owner.email','=',\Auth::user()->email)
                                ->whereRaw('MONTH(wok_payments.created_at) = '.$mes_anterior.' and YEAR(wok_payments.created_at) = '.$anio)->get();
        }else{
            $pagos = Payments::select('wok_payments.id_payments as id',
                DB::raw('DATE_FORMAT(wok_payments.created_at, \'%d/%m/%Y\') as date'),'wok_payments.descripcion as ds','wok_payments.monto as monto','wok_payments.constante as constante',
                'wok_proveedores.nombre as proveedor','wok_type_franchise.descripcion_franquicia as franquicia','wok_franchise.direccion_franquicia as direccion')
                ->join('wok_proveedores','wok_payments.proveedores','=','wok_proveedores.id_proveedores')
                ->join('wok_restaurant','wok_payments.restaurante','=','wok_restaurant.id_restaurant')
                ->join('wok_franchise','wok_restaurant.franquicia','=','wok_franchise.id_franchise')
                ->join('wok_type_franchise','wok_franchise.type_franquicia','=','wok_type_franchise.id_type_franchise')
                ->join('wok_employee','wok_restaurant.id_restaurant','=','wok_employee.restaurante')
                ->where('wok_employee.email','=',\Auth::user()->email)
                ->whereRaw('MONTH(wok_payments.created_at) = '.$mes_anterior.' and YEAR(wok_payments.created_at) = '.$anio)->get();
        }
        $meses = [ 1 => "Enero", "Febrero", "Marzo", "Abril", "Mayo","Junio", "Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];
        $anios = [];
        for ($i=2020; $i <= $anio ; $i++) { 
            array_push($anios,$i);
        }
        if($mes_anterior == 1){
            $anio = $anio - 1;
        }
        return view('owner.pagos.before', compact('meses','anios','mes','anio','pagos','mes_anterior'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rol = \Auth::user()->rol;
        if($rol == 'Propietario'){
            $proveedores = Proveedores::select('wok_proveedores.id_proveedores as id','wok_proveedores.nombre as proveedor')
                                    ->join('wok_restaurant','wok_proveedores.restaurante','=','wok_restaurant.id_restaurant')
                                    ->join('wok_franchise','wok_restaurant.franquicia','=','wok_franchise.id_franchise')
                                    ->join('wok_owner','wok_franchise.owner','=','wok_owner.id_owner')
                                    ->where('wok_owner.email','=',\Auth::user()->email)->get();
            $franquicias = Franchise::select('wok_restaurant.id_restaurant as id_restaurante','wok_franchise.direccion_franquicia as direccion', 'wok_type_franchise.descripcion_franquicia as franquicia')
                                    ->join('wok_restaurant','wok_franchise.id_franchise','=','wok_restaurant.franquicia')
                                    ->join('wok_owner','wok_franchise.owner','=','wok_owner.id_owner')
                                    ->join('wok_type_franchise','wok_franchise.type_franquicia','=','wok_type_franchise.id_type_franchise')
                                    ->where('wok_owner.email','=',\Auth::user()->email)->get();
        }else{
            $proveedores = Proveedores::select('wok_proveedores.id_proveedores as id','wok_proveedores.nombre as proveedor')
                                    ->join('wok_restaurant','wok_proveedores.restaurante','=','wok_restaurant.id_restaurant')
                                    ->join('wok_franchise','wok_restaurant.franquicia','=','wok_franchise.id_franchise')
                                    ->join('wok_employee','wok_restaurant.id_restaurant','=','wok_employee.restaurante')
                                    ->where('wok_employee.email','=',\Auth::user()->email)->get();
            $franquicias = Franchise::select('wok_restaurant.id_restaurant as id_restaurante','wok_franchise.direccion_franquicia as direccion', 'wok_type_franchise.descripcion_franquicia as franquicia')
                                    ->join('wok_restaurant','wok_franchise.id_franchise','=','wok_restaurant.franquicia')
                                    ->join('wok_employee','wok_restaurant.id_restaurant','=','wok_employee.restaurante')
                                    ->join('wok_type_franchise','wok_franchise.type_franquicia','=','wok_type_franchise.id_type_franchise')
                                    ->where('wok_employee.email','=',\Auth::user()->email)->get();
        }
        return view('owner.pagos.create',compact('proveedores','franquicias'));
    }

    private function insertPaymentsConstantes(){
        $day = date("d");
        $rol = \Auth::user()->rol;
            if($rol == 'Propietario'){
                $payments = Payments::select('wok_payments.descripcion as descripcion','wok_payments.monto as monto','wok_payments.restaurante as restaurante','wok_payments.proveedores as proveedores')
                                    ->join('wok_restaurant','wok_payments.restaurante','=','wok_restaurant.id_restaurant')
                                    ->join('wok_franchise','wok_restaurant.franquicia','=','wok_franchise.id_franchise')
                                    ->join('wok_owner','wok_franchise.owner','=','wok_owner.id_owner')
                                    ->where('wok_owner.email','=',\Auth::user()->email)
                                    ->where('wok_payments.constante','=','SI')
                                    ->whereRaw("wok_payments.created_at BETWEEN DATE_FORMAT(NOW() - INTERVAL 1 MONTH, '%Y-%m-01 00:00:00') AND DATE_FORMAT(LAST_DAY(NOW() - INTERVAL 1 MONTH), '%Y-%m-%d 23:59:59')")  
                                    ->whereRaw("DAY(wok_payments.created_at) = '".$day."'")
                                    ->get();
            }else{
                $payments = Payments::select('wok_payments.descripcion as descripcion','wok_payments.monto as monto','wok_payments.restaurante as restaurante','wok_payments.proveedores as proveedores')
                                    ->join('wok_restaurant','wok_payments.restaurante','=','wok_restaurant.id_restaurant')
                                    ->join('wok_franchise','wok_restaurant.franquicia','=','wok_franchise.id_franchise')
                                    ->join('wok_employee','wok_restaurant.id_restaurant','=','wok_employee.restaurante')
                                    ->where('wok_employee.email','=',\Auth::user()->email)
                                    ->where('wok_payments.constante','=','SI')
                                    ->whereRaw("wok_payments.created_at BETWEEN DATE_FORMAT(NOW() - INTERVAL 1 MONTH, '%Y-%m-01 00:00:00') AND DATE_FORMAT(LAST_DAY(NOW() - INTERVAL 1 MONTH), '%Y-%m-%d 23:59:59')")  
                                    ->whereRaw("DAY(wok_payments.created_at) = '".$day."'")
                                    ->get();
            }
        foreach($payments as $item){
            $pago = new Payments;
            $pago->descripcion = $item->descripcion;
            $pago->monto = $item->monto;
            $pago->constante = 'SI';
            $pago->restaurante = $item->restaurante;
            $pago->proveedores = $item->proveedores;
            $pago->save();
        }
        $log = [
            'desc'=>'Agrego los pagos constantes fecha '.date("m").'/'.date("Y"),
            'email'=>\Auth::user()->email,
            ];
            Log::create($log);
    }

    public function aggPayments($id){
        try{
            $day = date("d");
            $rol = \Auth::user()->rol;
            if($rol == 'Propietario'){
                $conteo = DB::table('wok_payments')
                    ->select(DB::raw('count(*) as count'))
                    ->join('wok_restaurant','wok_payments.restaurante','=','wok_restaurant.id_restaurant')
                    ->join('wok_franchise','wok_restaurant.franquicia','=','wok_franchise.id_franchise')
                    ->join('wok_owner','wok_franchise.owner','=','wok_owner.id_owner')
                    ->where('wok_owner.email','=',\Auth::user()->email)
                    ->whereRaw("wok_payments.created_at BETWEEN DATE_FORMAT(NOW(), '%Y-%m-01 00:00:00') AND DATE_FORMAT(LAST_DAY(NOW()), '%Y-%m-%d 23:59:59')")  
                    ->whereRaw("DAY(wok_payments.created_at) = '".$day."'")
                    ->first();                
            }else{
                $conteo = DB::table('wok_payments')
                    ->select(DB::raw('count(*) as count'))
                    ->join('wok_restaurant','wok_payments.restaurante','=','wok_restaurant.id_restaurant')
                    ->join('wok_franchise','wok_restaurant.franquicia','=','wok_franchise.id_franchise')
                    ->join('wok_employee','wok_restaurant.id_restaurant','=','wok_employee.restaurante')
                    ->where('wok_employee.email','=',\Auth::user()->email)
                    ->whereRaw("wok_payments.created_at BETWEEN DATE_FORMAT(NOW(), '%Y-%m-01 00:00:00') AND DATE_FORMAT(LAST_DAY(NOW()), '%Y-%m-%d 23:59:59')")  
                    ->whereRaw("DAY(wok_payments.created_at) = '".$day."'")
                    ->first(); 
            }
            if($conteo->count < 1){
                $this->insertPaymentsConstantes();
            }
            return Redirect::to('/pagos');
        }catch(\Illuminate\Database\QueryException $ex){ 
                dd($ex);
                Session::flash('message','Error al ingresar pago en el sistema');
                return $this->create();
        } 
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
            $day = date("d");
            $rol = \Auth::user()->rol;
            if($rol == 'Propietario'){
                $conteo = DB::table('wok_payments')
                    ->select(DB::raw('count(*) as count'))
                    ->join('wok_restaurant','wok_payments.restaurante','=','wok_restaurant.id_restaurant')
                    ->join('wok_franchise','wok_restaurant.franquicia','=','wok_franchise.id_franchise')
                    ->join('wok_owner','wok_franchise.owner','=','wok_owner.id_owner')
                    ->where('wok_owner.email','=',\Auth::user()->email)
                    ->whereRaw("wok_payments.created_at BETWEEN DATE_FORMAT(NOW(), '%Y-%m-01 00:00:00') AND DATE_FORMAT(LAST_DAY(NOW()), '%Y-%m-%d 23:59:59')")  
                    ->whereRaw("DAY(wok_payments.created_at) = '".$day."'")
                    ->first();                
            }else{
                $conteo = DB::table('wok_payments')
                    ->select(DB::raw('count(*) as count'))
                    ->join('wok_restaurant','wok_payments.restaurante','=','wok_restaurant.id_restaurant')
                    ->join('wok_franchise','wok_restaurant.franquicia','=','wok_franchise.id_franchise')
                    ->join('wok_employee','wok_restaurant.id_restaurant','=','wok_employee.restaurante')
                    ->where('wok_employee.email','=',\Auth::user()->email)
                    ->whereRaw("wok_payments.created_at BETWEEN DATE_FORMAT(NOW(), '%Y-%m-01 00:00:00') AND DATE_FORMAT(LAST_DAY(NOW()), '%Y-%m-%d 23:59:59')")  
                    ->whereRaw("DAY(wok_payments.created_at) = '".$day."'")
                    ->first(); 
            }
            if($conteo->count < 1){
                $this->insertPaymentsConstantes();
            }
            $pago = new Payments;
            $pago->descripcion = $request['descripcion'];
            $pago->monto = $request['monto'];
            $pago->constante = $request['inline-form-radio'];
            $pago->restaurante = $request['ifFranchise'];
            $pago->proveedores = $request['proveedor'];
            $pago->save();
            $log = [
                'desc'=>'Agrego el pago '.$pago->id_payments,
                'email'=>\Auth::user()->email,
                ];
                Log::create($log);
            return Redirect::to('/pagos');
        }catch(\Illuminate\Database\QueryException $ex){ 
            dd($ex);
            Session::flash('message','Error al ingresar pago en el sistema');
            return $this->create();
        } 
    }

    public function registroPayment(Request $request)
    {
        
        $mes_anterior =$request['mes'];
        $mes = $this->getBeforeMesES($mes_anterior);
        $anio = $request['anio'];
        if(\Auth::user()->rol == 'Propietario'){
            $pagos = Payments::select('wok_payments.id_payments as id',
                                DB::raw('DATE_FORMAT(wok_payments.created_at, \'%d/%m/%Y\') as date'),'wok_payments.descripcion as ds','wok_payments.monto as monto','wok_payments.constante as constante',
                                'wok_proveedores.nombre as proveedor','wok_type_franchise.descripcion_franquicia as franquicia','wok_franchise.direccion_franquicia as direccion')
                                ->join('wok_proveedores','wok_payments.proveedores','=','wok_proveedores.id_proveedores')
                                ->join('wok_restaurant','wok_payments.restaurante','=','wok_restaurant.id_restaurant')
                                ->join('wok_franchise','wok_restaurant.franquicia','=','wok_franchise.id_franchise')
                                ->join('wok_type_franchise','wok_franchise.type_franquicia','=','wok_type_franchise.id_type_franchise')
                                ->join('wok_owner','wok_franchise.owner','=','wok_owner.id_owner')
                                ->where('wok_owner.email','=',\Auth::user()->email)
                                ->whereRaw('MONTH(wok_payments.created_at) = '.$mes_anterior.' and YEAR(wok_payments.created_at) = '.$anio)->get();
        }else{
            $pagos = Payments::select('wok_payments.id_payments as id',
                                DB::raw('DATE_FORMAT(wok_payments.created_at, \'%d/%m/%Y\') as date'),'wok_payments.descripcion as ds','wok_payments.monto as monto','wok_payments.constante as constante',
                                'wok_proveedores.nombre as proveedor','wok_type_franchise.descripcion_franquicia as franquicia','wok_franchise.direccion_franquicia as direccion')
                                ->join('wok_proveedores','wok_payments.proveedores','=','wok_proveedores.id_proveedores')
                                ->join('wok_restaurant','wok_payments.restaurante','=','wok_restaurant.id_restaurant')
                                ->join('wok_franchise','wok_restaurant.franquicia','=','wok_franchise.id_franchise')
                                ->join('wok_type_franchise','wok_franchise.type_franquicia','=','wok_type_franchise.id_type_franchise')
                                ->join('wok_employee','wok_restaurant.id_restaurant','=','wok_employee.restaurante')
                                ->where('wok_employee.email','=',\Auth::user()->email)
                                ->whereRaw('MONTH(wok_payments.created_at) = '.$mes_anterior.' and YEAR(wok_payments.created_at) = '.$anio)->get();
        }
        $meses = [ 1 => "Enero", "Febrero", "Marzo", "Abril", "Mayo","Junio", "Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];
        $anios = [];
        for ($i=2020; $i <= $anio ; $i++) { 
            array_push($anios,$i);
        }
        return view('owner.pagos.before', compact('meses','anios','mes','anio','pagos','pagosConstantes','mes_anterior'));
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
        $rol = \Auth::user()->rol;
        if($rol == 'Propietario'){
            $proveedores = Proveedores::select('wok_proveedores.id_proveedores as id','wok_proveedores.nombre as proveedor')
                                    ->join('wok_restaurant','wok_proveedores.restaurante','=','wok_restaurant.id_restaurant')
                                    ->join('wok_franchise','wok_restaurant.franquicia','=','wok_franchise.id_franchise')
                                    ->join('wok_owner','wok_franchise.owner','=','wok_owner.id_owner')
                                    ->where('wok_owner.email','=',\Auth::user()->email)->get();
            $franquicias = Franchise::select('wok_restaurant.id_restaurant as id_restaurante','wok_franchise.direccion_franquicia as direccion', 'wok_type_franchise.descripcion_franquicia as franquicia')
                                    ->join('wok_restaurant','wok_franchise.id_franchise','=','wok_restaurant.franquicia')
                                    ->join('wok_owner','wok_franchise.owner','=','wok_owner.id_owner')
                                    ->join('wok_type_franchise','wok_franchise.type_franquicia','=','wok_type_franchise.id_type_franchise')
                                    ->where('wok_owner.email','=',\Auth::user()->email)->get();
        }else{
            $proveedores = Proveedores::select('wok_proveedores.id_proveedores as id','wok_proveedores.nombre as proveedor')
                                    ->join('wok_restaurant','wok_proveedores.restaurante','=','wok_restaurant.id_restaurant')
                                    ->join('wok_franchise','wok_restaurant.franquicia','=','wok_franchise.id_franchise')
                                    ->join('wok_employee','wok_restaurant.id_restaurant','=','wok_employee.restaurante')
                                    ->where('wok_employee.email','=',\Auth::user()->email)->get();
            $franquicias = Franchise::select('wok_restaurant.id_restaurant as id_restaurante','wok_franchise.direccion_franquicia as direccion', 'wok_type_franchise.descripcion_franquicia as franquicia')
                                    ->join('wok_restaurant','wok_franchise.id_franchise','=','wok_restaurant.franquicia')
                                    ->join('wok_employee','wok_restaurant.id_restaurant','=','wok_employee.restaurante')
                                    ->join('wok_type_franchise','wok_franchise.type_franquicia','=','wok_type_franchise.id_type_franchise')
                                    ->where('wok_employee.email','=',\Auth::user()->email)->first();
        }
        
        $payment = Payments::find($id);
        
        return view('owner.pagos.edit',compact('proveedores','franquicias','payment'));
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
            $pago = Payments::find($id);
            $pago->descripcion = $request['descripcion'];
            $pago->monto = $request['monto'];
            $pago->constante = $request['inline-form-radio'];
            if(\Auth::user()->rol == 'Propietario'){
            $pago->restaurante = $request['ifFranchise'];
            }
            $pago->proveedores = $request['proveedor'];
            $pago->save();
            $log = [
                'desc'=>'Edito el pago '.$pago->id_payments,
                'email'=>\Auth::user()->email,
                ];
                Log::create($log);
            return Redirect::to('/pagos');
        }catch(\Illuminate\Database\QueryException $ex){ 
            dd($ex);
            Session::flash('message','Error al ingresar pago en el sistema');
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

    public function deletePayment(Request $request){        
        $payment = Payments::find($request->id);
        $payment->delete();
        $log = [
            'desc'=>'Elimino el pago '.$request->id,
            'email'=>\Auth::user()->email,
            ];
            Log::create($log);
        return 'Registro eliminado';
    }
}
