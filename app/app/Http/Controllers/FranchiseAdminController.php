<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\AdministradorHasTypeFranchise;
use Redirect;
use App\User;
use Session;
use DB;

class FranchiseAdminController extends Controller
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
    public function create($id)
    {
        $administradores = User::where('rol', '=', 'Administrador')->get();
        
        return view("admin.users.administrador.index",compact('administradores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $count = AdministradorHasTypeFranchise::select(DB::raw('count(*) as conteo'))->where('type_franquicia','=',$request['ifFranchise'])->where('administrador','=',$request['idAdmin'])->first();
    
        if($count->conteo < 1){
            $admin_has_franchise = [
                'type_franquicia' => $request['ifFranchise'],
                'administrador' => $request['idAdmin']
            ];

            AdministradorHasTypeFranchise::create($admin_has_franchise);
            return Redirect::to('/administrators');
        }else{
            Session::flash('message','El tipo de franquicia ya se encuentra asignado al usuario');
            return $this->create($request['idAdmin']);
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
