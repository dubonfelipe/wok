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
use App\Employee;
use App\Log;
class ClientesController extends Controller
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
                ->where('wr.id_restaurant','=',$employee->restaurante)
            ->first();
        $clientes = Cliente::select('wok_cliente.id_cliente as id','wok_cliente.nombre as cliente','wok_cliente.nit_cliente as nit',
                            DB::raw('(SELECT GROUP_CONCAT(CONCAT(wok_contacto.telefono,\'&\',wok_contacto.id_contacto) separator \'**\') from wok_contacto
                                    where wok_contacto.cliente = wok_cliente.id_cliente) as contactos'),
                            DB::raw('(SELECT GROUP_CONCAT(wok_locations.direccion separator \'**\') from wok_locations
                                    where wok_locations.cliente = wok_cliente.id_cliente) as localidades'))
                                    ->where('wok_cliente.restaurante','=',$franchise->id_restaurant)->get();

        return view('cliente.index', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cliente.create');
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
            $employee = DB::table('wok_employee')
                ->where('email','=',Auth::user()->email)
            ->first();
            $franchise = DB::table('wok_restaurant as wr')
                ->where('wr.id_restaurant','=',$employee->restaurante)
            ->first();
            $cliente = new Cliente;
            $cliente->nombre = $request['cliente'];
            $cliente->nit_cliente = $request['nit'];
            $cliente->correo = $request['email'];
            $cliente->dpi = $request['dpi'];
            $cliente->restaurante = $franchise->id_restaurant;
            $cliente->save();

            if($request['cel']!=null){
                $contacto = new ContactoCliente;
                $contacto->cliente = $cliente->id_cliente;
                $contacto->telefono = $request['cel'];
                $contacto->save();
            }

            if($request['direccion']!=null){
                $locacion = new Locations;
                $locacion->cliente = $cliente->id_cliente;
                $locacion->direccion = $request['direccion'];
                $locacion->save();
            }

            $log = [
                'desc'=>'Ingreso un nuevo cliente '.$cliente->id_cliente,
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
        $cliente = Cliente::find($id);
        return view('cliente.edit',compact('cliente'));
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
            $cliente = Cliente::find($id);
            $cliente->nombre = $request['cliente'];
            $cliente->nit_cliente = $request['nit'];
            $cliente->correo = $request['email'];
            $cliente->dpi = $request['dpi'];
            $cliente->save();
            $log = [
                'desc'=>'Edito al cliente '.$cliente->id_cliente,
                'email'=>\Auth::user()->email,
                ];
                Log::create($log);
            return  Redirect::to('/clientes');
        }catch(\Illuminate\Database\QueryException $ex){ 
            dd($ex);
            Session::flash('message','Error de actualización de cliente');
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
