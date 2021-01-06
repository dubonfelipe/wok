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
use App\TypePrice;

class TypePriceController extends Controller
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
        $type_price = TypePrice::get();
        return view("administrador.typePrice.index",compact('type_price'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administrador.typePrice.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $type_price = new TypePrice;
        $type_price->descripcion = $request['descripcion'];
        $type_price->save();
        $log = [
            'desc'=>'Ingreso un nuevo tipo de precio',
            'email'=>\Auth::user()->email,
            ];
        Log::create($log);
        return Redirect::to('/typePrice');
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
        $typePrice = DB::table('wok_type_price')
            ->where('id_type_price', '=', $id)
        ->first();
      //  dd($certificador);
        return view("administrador.typePrice.edit",compact('typePrice'));
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
        $typeFoods = TypePrice::find($id);
        $typeFoods->descripcion = $request['descripcion'];
        $typeFoods->save();
        $log = [
            'desc'=>'Edito un tipo de Precio',
            'email'=>\Auth::user()->email,
            ];
            Log::create($log);
        return Redirect::to('/typePrice');
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
