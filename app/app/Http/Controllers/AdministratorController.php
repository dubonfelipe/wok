<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Session;
use Redirect;

use DB;
use App\Administrador;
use App\User;
use App\Log;
use App\AdministradorHasTypeFranchise;
use Response;
use Mail;

class AdministratorController extends Controller
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
        $administradores = User::where('rol', '=', 'Administrador')->get();
        
        return view("admin.users.administrador.index",compact('administradores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $franchise_type = DB::table('wok_type_franchise')->get();
        return view("admin.users.administrador.create", compact('franchise_type'));
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
            $user->rol = 'Administrador';
            $user->email=$request['email'];
            $user->estado=1;
            $user->password=bcrypt($password);

            $user->save();

            $administrador = new Administrador;
            $administrador->primer_nombre = $request['fname'];
            $administrador->primer_apellido = $request['lname'];
            $administrador->email = $request['email'];
            $administrador->documento_identificacion = '000';
            $administrador->telefono = 0;

            $administrador->save();

            $admin_has_franchise = [
                'type_franquicia' => $request['ifFranchise'],
                'administrador' => $administrador->id_administrador
            ];

            AdministradorHasTypeFranchise::create($admin_has_franchise);
            $log = [
                'desc'=>'Ingreso un nuevo usuario Administrador',
                'email'=>\Auth::user()->email,
                ];
                Log::create($log);
            //dd($user->id);

        
        Mail::send('mail.newcount',['password'=>$password], function($msj) use($request,$password){
            $msj->subject('Cuenta creada [WOK - DO Software]');
            $msj->to($request['email']);
        });

        Session::flash('message','Enviado Correctamente');
        return Redirect::to('/administrators');
    }catch(\Illuminate\Database\QueryException $ex){ 
        //dd($ex->getMessage()); 
        Session::flash('message','El correo ingresado ya se encuentra registrado en el sistema');
        return Redirect::to(route('administrators.create'));
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
        $admin = Administrador::where('email','=',$id)->first();
        $nombre_completo = $admin->primer_nombre." ".$admin->segundo_nombre." ".$admin->otros_nombres." ".$admin->primer_apellido." ".$admin->segundo_apellido." ".$admin->apellido_casada;
        $dpi = ($admin->documento_identificacion == '000') ? 'Sin información' : $admin->documento_identificacion ;
        $tiposFranquicias = Administrador::select('wok_type_franchise.descripcion_franquicia as descript',
        DB::raw('(select count(*) from wok_franchise where wok_franchise.type_franquicia = wok_type_franchise.id_type_franchise) as conteo'))
                        ->join('wok_administrador_has_type_franchise','wok_administrador.id_administrador','=','wok_administrador_has_type_franchise.administrador')
                        ->join('wok_type_franchise','wok_administrador_has_type_franchise.type_franquicia','=','wok_type_franchise.id_type_franchise')
                        ->where('wok_administrador.email','=',$id)->get();
        //dd($tiposFranquicias);
        return view("admin.users.administrador.edit", compact('admin','nombre_completo', 'dpi', 'tiposFranquicias'));
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
       // return $this->index();
       return  Redirect::to('/administrators');
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

    public function addFranchise($id){
        $franchise_type = DB::table('wok_type_franchise')->get();
        $id_admin = $id;
        return view("admin.franquicia.franchise.create_admin", compact('franchise_type', 'id_admin'));
    }
}
