<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Session;
use Redirect;

use DB;
use App\TypeFranchise;
use App\Log;
class TypeFranchiseController extends Controller
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
        $typeFranchise = DB::table('wok_type_franchise')->get();
        
        return view("admin.franquicia.typefranchise.index", compact('typeFranchise'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.franquicia.typefranchise.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $typeFranchise = [
            'descripcion_franquicia' => $request->descripcion
        ];
        TypeFranchise::create($typeFranchise);
        $log = [
            'desc'=>'Ingreso un nuevo tipo de franquicia',
            'email'=>\Auth::user()->email,
        ];
        Log::create($log);

        return Redirect::to('/typefranchise');
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
        $typeFranchise = DB::table('wok_type_franchise')
            ->where('id_type_franchise', '=', $id)
        ->first();
      
        return view('admin.franquicia.typefranchise.edit', compact('typeFranchise'));
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
        $typeFranchise = TypeFranchise::find($id);
        $typeFranchise->descripcion_franquicia = $request->descripcion;
        $typeFranchise->save();
        $log = [
            'desc'=>'Actualizo el tipo de franquicia '.$typeFranchise->descripcion,
            'email'=>\Auth::user()->email,
            ];
            Log::create($log);
        return Redirect::to('/typefranchise');
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
