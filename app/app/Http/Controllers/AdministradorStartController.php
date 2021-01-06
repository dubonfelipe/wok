<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Administrador;
use App\Log;
use Redirect;
use Session;
class AdministradorStartController extends Controller
{
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
        $administrador = Administrador::where('email','=',\Auth::user()->email)->first();
        return view('administrador.inicio.edit', compact('administrador'));
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
        $tel = str_replace("-", "", $request['telefono']);
        $tel2 = str_replace("-", "", $request['telefono2']);
        $administrador = Administrador::find($id);
        $administrador->segundo_nombre = $request['segundo_nombre'];
        $administrador->otros_nombres = $request['otros_nombres'];
        $administrador->segundo_apellido = $request['segundo_apellido'];
        $administrador->apallido_casada = $request['apellido_casada'];
        $administrador->documento_identificacion = $request['dpi'];
        $administrador->telefono = $tel;
        $administrador->telefono2 = $tel2; 
        $administrador->save();
        $log = [
            'desc'=>'Realizo actualizacion de información de administrador',
            'email'=>\Auth::user()->email,
            ];
            Log::create($log);
        return Redirect::to('/home');
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
