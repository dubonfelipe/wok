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
use App\Owner;
use App\Franchise;
use App\PersonContable;
class NegocioOwnerController extends Controller
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
    {   $rol = \Auth::user()->rol;
        if($rol == 'Propietario'){
            $franquicia = Franchise::select('wok_franchise.id_franchise as id_franchise','wok_franchise.direccion_franquicia as direccion_franquicia','wok_franchise.id_franchise as id_franchise','wok_type_franchise.descripcion_franquicia as descripcion_franquicia',
                                    DB::raw('CONCAT(wok_person_contable.primer_apellido,", ",wok_person_contable.primer_nombre) as nombre_contable'),'wok_person_contable.id_per_con as id_contable',
                                    'wok_person_contable.documento_identificacion as dpi','wok_person_contable.email as contable_email','wok_person_contable.telefono as telefono_contable',
                                    'wok_person_contable.telefono2 as telefono2')
                                    ->join('wok_person_contable','wok_franchise.persona_contable','=','wok_person_contable.id_per_con')
                                    ->join('wok_restaurant','wok_franchise.id_franchise','=','wok_restaurant.franquicia')
                                    ->join('wok_owner','wok_franchise.owner','=','wok_owner.id_owner')
                                    ->join('wok_type_franchise','wok_franchise.type_franquicia','=','wok_type_franchise.id_type_franchise')
                                    ->where('wok_owner.email','=',\Auth::user()->email)->get();
        }else if($rol == 'Gerente'){
            $franquicia = Franchise::select('wok_franchise.id_franchise as id_franchise','wok_franchise.direccion_franquicia as direccion_franquicia','wok_franchise.id_franchise as id_franchise','wok_type_franchise.descripcion_franquicia as descripcion_franquicia',
                                    DB::raw('CONCAT(wok_person_contable.primer_apellido,", ",wok_person_contable.primer_nombre) as nombre_contable'),'wok_person_contable.id_per_con as id_contable',
                                    'wok_person_contable.documento_identificacion as dpi','wok_person_contable.email as contable_email','wok_person_contable.telefono as telefono_contable',
                                    'wok_person_contable.telefono2 as telefono2')
                                    ->join('wok_person_contable','wok_franchise.persona_contable','=','wok_person_contable.id_per_con')
                                    ->join('wok_restaurant','wok_franchise.id_franchise','=','wok_restaurant.franquicia')
                                    ->join('wok_employee','wok_restaurant.id_restaurant','=','wok_employee.restaurante')
                                    ->join('wok_type_franchise','wok_franchise.type_franquicia','=','wok_type_franchise.id_type_franchise')
                                    ->where('wok_employee.email','=',\Auth::user()->email)->get();
        }
        return view("owner.negocio.index",compact('franquicia'));
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
    {$owner = Owner::where('email','=',\Auth::user()->email)->first();
        $contador = PersonContable::select('wok_person_contable.id_per_con as id','wok_person_contable.primer_nombre as nombre','wok_person_contable.primer_apellido as apellido','wok_person_contable.documento_identificacion as dpi',
                    'wok_person_contable.email as email','wok_person_contable.telefono as telefono','wok_person_contable.telefono2 as telefono2','users.estado as estado','users.id as iduser')
                    ->join('users','wok_person_contable.email','=','users.email')
                    ->where('owner','=',$owner->id_owner)
                    ->get();
        $selfContador = PersonContable::find(1);      
        $franquicia = Franchise::find($id);     
        return view("owner.negocio.contador",compact('contador','franquicia','selfContador'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $franquicia = Franchise::find($id);
        return view("owner.negocio.edit",compact('franquicia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   try{
            $franquicia = Franchise::find($id);
            $franquicia->direccion_franquicia = $request['direccion_franquicia'];
            $franquicia->telefono = $request['telefono_franquicia'];
            $franquicia->email = $request['email_franquicia'];
            $franquicia->save();

            $log = [
                'desc'=>'Edito información de franquicia',
                'email'=>\Auth::user()->email,
            ];
            Log::create($log);
            return Redirect::to('/negocio');
        }catch(\Illuminate\Database\QueryException $ex){ 
            dd($ex);
            Session::flash('message','Error la edicion de Franquicia');
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

    public function contador(Request $request, $id)
    {
        try{

            $franquicia = Franchise::find($id);
            $franquicia->persona_contable = $request['contador'];
            $franquicia->save();

            $log = [
                'desc'=>'Se reasigno contador',
                'email'=>\Auth::user()->email,
                ];
                Log::create($log);
        
    
            return Redirect::to('/negocio');
        }catch(\Illuminate\Database\QueryException $ex){ 
            dd($ex);
            Session::flash('message','Error en el sistema al asignar contador');
            return $this->create();
        } 
    }
}
