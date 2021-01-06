<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Franchise;
use App\Restaurant;
use App\Owner;
use Session;

use Redirect;

class FranchiseController extends Controller
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
        $franchise_type = DB::table('wok_type_franchise')->get();
        $type_price = DB::table('wok_type_price')->get();
        return view("admin.franquicia.franchise.create", compact('franchise_type', 'type_price'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $franquicia = new Franchise;
            $franquicia->direccion_franquicia = 'null';
            $franquicia->type_franquicia = $request['ifFranchise'];
            $franquicia->owner = $request['idowner'];
            $franquicia->persona_contable = 1;
            $franquicia->type_price = $request['idTypePrice'];

            $franquicia->save();

            $restaurant = new Restaurant;
            $restaurant->franquicia = $franquicia->id_franchise;
            $restaurant->save();

        $owner = Owner::find($request['idowner']);
        return Redirect::to('/owner'.'/'.$owner->email);
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
        //
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
