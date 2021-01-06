<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Session;
use Redirect;

use DB;
use App\Cliente;
use App\ContactoCliente;
use App\Locations;
use App\Log;
class ContactoController extends Controller
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
        try{
            
            $contacto = new ContactoCliente;
            $contacto->telefono = $request['cel'];
            $contacto->cliente = $request['idcliente'];
            $contacto->save();
            $log = [
                'desc'=>'Ingreso un nuevo contacto '.$contacto->id_contacto.' para el cliente '.$request['idcliente'],
                'email'=>\Auth::user()->email,
                ];
                Log::create($log);
            return  Redirect::to('/clientes');

        }catch(\Illuminate\Database\QueryException $ex){ 
            dd($ex);
            Session::flash('message','Error de ingreso de cliente');
            return $this->create();
        } 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente = $id;
        return view('contacto.create', compact('cliente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $contacto = ContactoCliente::find($id);
        return view('contacto.edit', compact('contacto'));
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
            
            $contacto = ContactoCliente::find($id);
            $contacto->telefono = $request['telefono'];
            $contacto->save();
            $log = [
                'desc'=>'Ingreso un nuevo contacto '.$contacto->id_contacto.' para el cliente '.$request['idcliente'],
                'email'=>\Auth::user()->email,
                ];
                Log::create($log);
            return  Redirect::to('/clientes');

        }catch(\Illuminate\Database\QueryException $ex){ 
            dd($ex);
            Session::flash('message','Error de ingreso de cliente');
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
}
