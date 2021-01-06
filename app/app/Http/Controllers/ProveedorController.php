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
use App\Proveedores;
use App\Owner;
use App\Franchise;
class ProveedorController extends Controller
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
        $rol = \Auth::user()->rol;
        if($rol == 'Propietario'){
            $owner =  Owner::where('email','=',\Auth::user()->email)->first();
            $proveedores = Proveedores::select('wok_proveedores.id_proveedores as id','wok_proveedores.nombre as proveedor','wok_proveedores.nit_proveedor as nitp','wok_proveedores.descripcion as descripcion',
                            'wok_type_franchise.descripcion_franquicia as tipo_franquicia','wok_franchise.direccion_franquicia as direccion')
                            ->join('wok_restaurant','wok_proveedores.restaurante','=','wok_restaurant.id_restaurant')
                            ->join('wok_franchise','wok_restaurant.franquicia','=','wok_franchise.id_franchise')
                            ->join('wok_type_franchise','wok_type_franchise.id_type_franchise','=','wok_franchise.type_franquicia')
                            ->where('wok_franchise.owner','=',$owner->id_owner)
                            ->get();
        }else if($rol = 'Gerente'){
            $proveedores = Proveedores::select('wok_proveedores.id_proveedores as id','wok_proveedores.nombre as proveedor','wok_proveedores.nit_proveedor as nitp','wok_proveedores.descripcion as descripcion',
                            'wok_type_franchise.descripcion_franquicia as tipo_franquicia','wok_franchise.direccion_franquicia as direccion')
                            ->join('wok_restaurant','wok_proveedores.restaurante','=','wok_restaurant.id_restaurant')
                            ->join('wok_employee','wok_restaurant.id_restaurant','=','wok_employee.restaurante')
                            ->join('wok_franchise','wok_restaurant.franquicia','=','wok_franchise.id_franchise')
                            ->join('wok_type_franchise','wok_type_franchise.id_type_franchise','=','wok_franchise.type_franquicia')
                            ->where('wok_employee.email','=',\Auth::user()->email)
                            ->get();
        }
        return view("owner.proveedor.index",compact('proveedores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rol = \Auth::user()->rol;
        if($rol == 'Propietario'){
            $franquicias = Franchise::select('wok_restaurant.id_restaurant as id_restaurante','wok_franchise.direccion_franquicia as direccion', 'wok_type_franchise.descripcion_franquicia as franquicia')
                                ->join('wok_restaurant','wok_franchise.id_franchise','=','wok_restaurant.franquicia')
                                ->join('wok_owner','wok_franchise.owner','=','wok_owner.id_owner')
                                ->join('wok_type_franchise','wok_franchise.type_franquicia','=','wok_type_franchise.id_type_franchise')
                                ->where('wok_owner.email','=',\Auth::user()->email)->get();
        }else if($rol == 'Gerente'){
            $franquicias = Franchise::select('wok_restaurant.id_restaurant as id_restaurante','wok_franchise.direccion_franquicia as direccion', 'wok_type_franchise.descripcion_franquicia as franquicia')
                                ->join('wok_restaurant','wok_franchise.id_franchise','=','wok_restaurant.franquicia')
                                ->join('wok_employee','wok_restaurant.id_restaurant','=','wok_employee.restaurante')
                                ->join('wok_type_franchise','wok_franchise.type_franquicia','=','wok_type_franchise.id_type_franchise')
                                ->where('wok_employee.email','=',\Auth::user()->email)->get();
        }
        return view("owner.proveedor.create",compact('franquicias'));
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
            $proveedor = new Proveedores;
            $proveedor->nombre = $request['proveedor'];
            $proveedor->nit_proveedor = $request['nit'];
            $proveedor->descripcion = $request['descripcion'];
            $proveedor->restaurante = $request['ifFranchise'];
            $proveedor->save();

            $log = [
                'desc'=>'Ingreso un nuevo proveedor',
                'email'=>\Auth::user()->email,
            ];
            Log::create($log);

            return Redirect::to('/proveedor');
        }catch(\Illuminate\Database\QueryException $ex){ 
            dd($ex);
            Session::flash('message','Error al realizar ingreso de proveedor');
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
        $proveedor = Proveedores::find($id);
        $rol = \Auth::user()->rol;
        if($rol == 'Propietario'){
            $franquicias = Franchise::select('wok_restaurant.id_restaurant as id_restaurante','wok_franchise.direccion_franquicia as direccion', 'wok_type_franchise.descripcion_franquicia as franquicia')
                                ->join('wok_restaurant','wok_franchise.id_franchise','=','wok_restaurant.franquicia')
                                ->join('wok_owner','wok_franchise.owner','=','wok_owner.id_owner')
                                ->join('wok_type_franchise','wok_franchise.type_franquicia','=','wok_type_franchise.id_type_franchise')
                                ->where('wok_owner.email','=',\Auth::user()->email)->get();
            
        }else if($rol == 'Gerente'){
            $franquicias = Franchise::select('wok_restaurant.id_restaurant as id_restaurante','wok_franchise.direccion_franquicia as direccion', 'wok_type_franchise.descripcion_franquicia as franquicia')
                                ->join('wok_restaurant','wok_franchise.id_franchise','=','wok_restaurant.franquicia')
                                ->join('wok_employee','wok_restaurant.id_restaurant','=','wok_employee.restaurante')
                                ->join('wok_type_franchise','wok_franchise.type_franquicia','=','wok_type_franchise.id_type_franchise')
                                ->where('wok_employee.email','=',\Auth::user()->email)->first();
        }
        
        return view("owner.proveedor.edit",compact('franquicias','proveedor'));
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
            $rol = \Auth::user()->rol;
            $proveedor = Proveedores::find($id);
            $proveedor->nombre = $request['proveedor'];
            $proveedor->nit_proveedor = $request['nit'];
            $proveedor->descripcion = $request['descripcion'];
            if($rol == 'Propietario'){
                $proveedor->restaurante = $request['ifFranchise'];
            }
            $proveedor->save();
            
            $log = [
                'desc'=>'Edito el proveedor '.$proveedor->nombre,
                'email'=>\Auth::user()->email,
            ];
            Log::create($log);

            return Redirect::to('/proveedor');
        }catch(\Illuminate\Database\QueryException $ex){ 
            dd($ex);
            Session::flash('message','Error al realizar actualización de proveedor');
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
