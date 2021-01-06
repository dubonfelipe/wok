<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Session;
use Redirect;

use DB;
use App\Frases;
use App\Log;
class PhrasesController extends Controller
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
        $phrases = DB::table('wok_frases as wf')
            ->join('wok_fel_type as wft','wft.id_fel','=','wf.fel')
            ->select('wf.id_frases','wf.descripcion', 'wft.descripcion as descripcion_fel')
        ->get();
        //dd($phrases);
        return view("fel.frase.index", compact('phrases'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $fel_types = DB::table('wok_fel_type')->get();
        return view("fel.frase.create", compact('fel_types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->descripcion);
        $phrase = new Frases;
        $phrase->descripcion = $request->descripcion;
        $phrase->fel = $request->id_fel;
        $phrase->save();
        $log = [
            'desc'=>'Ingreso un nueva frase',
            'email'=>\Auth::user()->email,
        ];
        Log::create($log);
        return Redirect::to('/phrases');
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
        $phrase = Frases::find($id);
        $fel_types = $fel_types = DB::table('wok_fel_type')->get();
        return view('fel.frase.edit', compact('phrase','fel_types'));
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
        $phrase = Frases::find($id);
        $phrase->descripcion = $request->descripcion;
        $phrase->fel = $request->id_fel;
        $phrase->save();
        $log = [
            'desc'=>'Actualizo la frase '.  $phrase->descripcion,
            'email'=>\Auth::user()->email,
            ];
            Log::create($log);
        return Redirect::to('/phrases');
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

    public function deletePhra(Request $request){
        $phrase = Frases::find($request->id);
        $phrase->delete();
        $log = [
            'desc'=>'Elimino la frase con id: '.$request->id,
            'email'=>\Auth::user()->email,
            ];
            Log::create($log);
        return 'Registro eliminado';
    }
}
