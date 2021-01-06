<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Redirect;
use Auth;
use Session;

use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Owner;
use App\Administrador;
use App\Franchise;
use App\CorteCaja;
class HomeController extends Controller
{
    /**
	  * Create a new controller instance.
	  *
	  * @return void
	  */
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
        $rol = \Auth::user()->rol;
        
        if($rol == 'Admin'){
            return view("home");
        }else if($rol == 'Administrador'){
            $administrador = Administrador::where('email','=',\Auth::user()->email)->first();
            if($administrador->documento_identificacion =='000' && $administrador->telefono == 0){
                return view('administrador.inicio.edit', compact('administrador'));
            }else{
                return view("home");
            }
        }else if($rol == 'Propietario'){
            $owner = Owner::where('email','=',\Auth::user()->email)->first();
            if($owner->documento_identificacion == '000' && $owner->telefono == 0){
                $franquicia = Franchise::where('owner','=',$owner->id_owner)->orderBy("created_at","ASC")->first();
                return view('owner.inicio.edit', compact('owner','franquicia'));
            }else{
                return view("home");
            }
        }else if($rol == 'Mesero'){
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
                    return Redirect::to('/tables');
                }else{return Redirect::to('/start');}
            }else{
                return Redirect::to('/start');
            }
            
        }else if($rol == 'Cocinero'){
            return Redirect::to('/wokers');
        }else if($rol == 'Delivery'){
            return Redirect::to('/pedidosDelivery');
        }else if($rol == 'Gerente' || $rol == 'Cajero'){
            $employee = DB::table('wok_employee')
                ->where('email','=',Auth::user()->email)
                ->first();
            $franchise = DB::table('wok_restaurant as wr')
                ->join('wok_franchise as wf','wf.id_franchise','=','wr.franquicia')
                ->where('wr.id_restaurant','=',$employee->restaurante)
                ->first();
            $regCorte = CorteCaja::select(DB::raw('count(*) as conteo'))->where('restaurante','=',$franchise->id_restaurant)
                ->whereRaw('DAY(created_at) = '.date("d").' and MONTH(created_at) = '.date("m").' and YEAR(created_at) = '.date("Y"))->first();
//                dd(number_format($regCorte->conteo - 4,2, '.', ','));
            if($regCorte->conteo > 0){
                return view("home");
            }else{
                return Redirect::to(route('corteCaja.create'));
            }
            
        }else {
            return view("home");
        }
    }

}
