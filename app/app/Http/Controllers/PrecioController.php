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
use App\Price;

class PrecioController extends Controller
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
              
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
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
        $type_price = DB::table('wok_type_price')
                    ->whereRaw('wok_type_price.id_type_price not in (SELECT wok_price.type_price from wok_price  where wok_price.menu = '.$id.')')
                    ->get();
        return view("administrador.precio.create", compact('type_price','id'));     
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $type_price = DB::table('wok_type_price')->get();
        $precio = Price::find($id);
        return view("administrador.precio.edit",compact('type_price','precio'));
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
            $precio = Price::find($id);
            $precio->monto = $request['precio'];
            $precio->type_price = $request['tipoPrecio'];
            $precio->save();
            return Redirect::to('/recetaMenu');
        }catch(\Illuminate\Database\QueryException $ex){ 
            Session::flash('message','Conflicto a ingresar registro');
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

    public function addPrecio(Request $request, $id)
    {
        $precio = new Price;
        $precio->monto = $request['precio'];
        $precio->type_price = $request['tipoPrecio'];
        $precio->menu = $id;
        $precio->save();
        return Redirect::to('/recetaMenu');
    }
}
