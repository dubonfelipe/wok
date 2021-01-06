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
use App\Owner;
use App\PersonContable;
use App\User;
use Response;
use Mail;
class ContadorOwnerController extends Controller
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
        $owner = Owner::where('email','=',\Auth::user()->email)->first();
        $contador = PersonContable::select('wok_person_contable.id_per_con as id','wok_person_contable.primer_nombre as nombre','wok_person_contable.primer_apellido as apellido','wok_person_contable.documento_identificacion as dpi',
                    'wok_person_contable.email as email','wok_person_contable.telefono as telefono','wok_person_contable.telefono2 as telefono2','users.estado as estado','users.id as iduser')
                    ->join('users','wok_person_contable.email','=','users.email')
                    ->where('owner','=',$owner->id_owner)
                    ->get();
        return view("owner.contador.index",compact('contador'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("owner.contador.create");
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

            $password = substr(md5(uniqid()), 0, 10);
            $user=new User;
            $user->lname = $request['lname'];
            $user->fname = $request['fname'];
            $user->rol = 'Contador';
            $user->email=$request['email'];
            $user->estado=1;
            $user->password=bcrypt($password);

            $user->save();

            $owner = Owner::where('email','=',\Auth::user()->email)->first();

            $empleado = new PersonContable;
            $empleado->primer_nombre =  $request['lname'];
            $empleado->segundo_nombre = $request['segundo_nombre'];
            $empleado->otros_nombres = $request['otros_nombres'];
            $empleado->primer_apellido = $request['fname'];
            $empleado->segundo_apellido = $request['segundo_apellido'];
            $empleado->apallido_casada = $request['apellido_casada'];
            $empleado->documento_identificacion = $request['dpi'];
            $empleado->email = $request['email'];
            $empleado->telefono = $request['telefono'];
            $empleado->telefono2 = $request['telefono2'];
            $empleado->owner = $owner->id_owner;
            $empleado->save();

            $log = [
                'desc'=>'Ingreso un nuevo usuario Contador ',
                'email'=>\Auth::user()->email,
                ];
                Log::create($log);
        
            Mail::send('mail.newcount',['password'=>$password], function($msj) use($request,$password){
                $msj->subject('Cuenta creada [WOK - DO Software]');
                $msj->to($request['email']);
            });

            Session::flash('message','Enviado Correctamente');
            return Redirect::to('/contador');
        }catch(\Illuminate\Database\QueryException $ex){ 
            dd($ex);
            Session::flash('message','El correo ingresado ya se encuentra registrado en el sistema');
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
        $contador = PersonContable::find($id);
        return view("owner.contador.edit",compact('contador'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        $flag = ($user->estado == 1) ? 0 : 1;
        $user->estado = $flag;
        $user->save();

        $log = [
            'desc'=>'Se cambio el estado del usario '.$user->email,
            'email'=>\Auth::user()->email,
            ];
            Log::create($log);
       return  Redirect::to('/contador');
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

            $empleado = PersonContable::find($id);
            $empleado->primer_nombre =  $request['lname'];
            $empleado->segundo_nombre = $request['segundo_nombre'];
            $empleado->otros_nombres = $request['otros_nombres'];
            $empleado->primer_apellido = $request['fname'];
            $empleado->segundo_apellido = $request['segundo_apellido'];
            $empleado->apallido_casada = $request['apellido_casada'];
            $empleado->documento_identificacion = $request['dpi'];
            $empleado->email = $request['email'];
            $empleado->telefono = $request['telefono'];
            $empleado->telefono2 = $request['telefono2'];
            $empleado->save();

            $log = [
                'desc'=>'Edito usuario Contador ',
                'email'=>\Auth::user()->email,
                ];
                Log::create($log);
        
    
            return Redirect::to('/contador');
        }catch(\Illuminate\Database\QueryException $ex){ 
            dd($ex);
            Session::flash('message','Error en el sistema al editar contador');
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
