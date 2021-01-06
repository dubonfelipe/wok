<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Session;
use Redirect;

use DB;
use App\Owner;
use App\Franchise;
use App\Log;
class OwnerStartController extends Controller
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
        //
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
        try{
            $tel = str_replace("-", "", $request['telefono']);
            $tel2 = str_replace("-", "", $request['telefono2']);
            $tel3 = str_replace("-", "", $request['telefono_franquicia']);
            $owner = Owner::find($id);
            $owner->segundo_nombre = $request['segundo_nombre'];
            $owner->otros_nombres = $request['otros_nombres'];
            $owner->segundo_apellido = $request['segundo_apellido'];
            $owner->apallido_casada = $request['apellido_casada'];
            $owner->documento_identificacion = $request['dpi'];
            $owner->telefono = $tel;
            $owner->telefono2 = $tel2;
            $owner->save();

            $franchise = Franchise::where('owner','=',$owner->id_owner)->orderBy("created_at","ASC")->first();
            $franchise->direccion_franquicia = $request['direccion_franquicia'];
            $franchise->telefono = $tel3;
            $franchise->email = $request['email_franquicia'];
            $franchise->save();

            $log = [
                'desc'=>'Realizo actualizacion de información de propietario',
                'email'=>\Auth::user()->email,
            ];

            Log::create($log);
            return Redirect::to('/');
        }catch(\Illuminate\Database\QueryException $ex){ 
            dd($ex);
            Session::flash('message','Error al realizar ingreso de propiertario');
            return Redirect::to('/');
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
}
