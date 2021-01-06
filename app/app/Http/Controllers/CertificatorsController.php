<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Session;
use Redirect;

use DB;
use App\Certificador;
use App\Log;

class CertificatorsController extends Controller
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
        $certificadores = DB::table('wok_certificador')->get();
        return view("fel.certificador.index", compact('certificadores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("fel.certificador.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $certificador = new Certificador;
        $certificador->nombre = $request->nombre;
        $certificador->nit = $request->nit;
        $certificador->descripcion = $request->descripcion;
        $certificador->save();
        $log = [
            'desc'=>'Ingreso un nuevo certificador',
            'email'=>\Auth::user()->email,
            ];
            Log::create($log);
        return Redirect::to('/certificators');
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
        $certificador = DB::table('wok_certificador')
            ->where('id_certificador', '=', $id)
        ->first();
      //  dd($certificador);
        return view('fel.certificador.edit', compact('certificador'));
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
        
        $certificador = Certificador::find($id);
        $certificador->nombre = $request->nombre;
        $certificador->nit = $request->nit;
        $certificador->descripcion = $request->descripcion;
        $certificador->save();
        $log = [
            'desc'=>'Actualizo el certificador '.$certificador->nombre,
            'email'=>\Auth::user()->email,
            ];
            Log::create($log);
        return Redirect::to('/certificators');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $certificador = Certificador::find($id);
        $certificador->delete();
        return Redirect::to('/certificators');
    }

    public function deleteCert(Request $request){
        $certificador = Certificador::find($request->id);
        $certificador->delete();
        $log = [
            'desc'=>'Elimino el certificador con id: '.$request->id,
            'email'=>\Auth::user()->email,
            ];
            Log::create($log);
        return 'Registro eliminado';
    }
}
