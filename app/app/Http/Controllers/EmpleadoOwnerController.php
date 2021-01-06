<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Session;
use Redirect;

use DB;
use App\Owner;
use App\User;
use App\Log;
use App\Franchise;
use App\Restaurant;
use App\Employee;
use App\TypeEmployee;
use App\Banco;
use App\AdminEmployee;
use Response;
use Mail;

class EmpleadoOwnerController extends Controller
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
            $owner = Owner::where('email','=',\Auth::user()->email)->first();
            $empleado = Employee::select('wok_employee.id_employee as id','wok_employee.primer_nombre as primer_nombre','wok_employee.primer_apellido as primer_apellido','wok_employee.email as email',
                    'wok_employee.telefono as telefono', 'wok_type_employee.descripcion as descripcion','users.estado as estado','users.id as iduser',
                    'wok_type_franchise.descripcion_franquicia as tipo_franquicia','wok_franchise.direccion_franquicia as direccion',
                    'wok_admin_employee.numero_cuenta as cuenta','wok_admin_employee.monetaria_ahorro as tipo_cuenta','wok_admin_employee.monto as salario',
                    'wok_banco.nombre as banco')
                    ->join('wok_type_employee','wok_type_employee.id_type_employee','=','wok_employee.tipo_empleado')
                    ->join('wok_admin_employee','wok_employee.id_employee','=','wok_admin_employee.empleado')
                    ->join('wok_banco','wok_admin_employee.banco','=','wok_banco.id_banco')
                    ->join('users','wok_employee.email','=','users.email')
                    ->join('wok_restaurant','wok_employee.restaurante','=','wok_restaurant.id_restaurant')
                    ->join('wok_franchise','wok_restaurant.franquicia','=','wok_franchise.id_franchise')
                    ->join('wok_type_franchise','wok_type_franchise.id_type_franchise','=','wok_franchise.type_franquicia')
                    ->where('wok_franchise.owner','=',$owner->id_owner)->get();
        }else{
            $franquicia = Franchise::join('wok_restaurant','wok_franchise.id_franchise','=','wok_restaurant.franquicia')
                        ->join('wok_employee','wok_restaurant.id_restaurant','=','wok_employee.restaurante')
                        ->join('wok_type_franchise','wok_franchise.type_franquicia','=','wok_type_franchise.id_type_franchise')
                        ->where('wok_employee.email','=',\Auth::user()->email)->first();

            $empleado = Employee::select('wok_employee.id_employee as id','wok_employee.primer_nombre as primer_nombre','wok_employee.primer_apellido as primer_apellido','wok_employee.email as email',
                    'wok_employee.telefono as telefono', 'wok_type_employee.descripcion as descripcion','users.estado as estado','users.id as iduser',
                    'wok_type_franchise.descripcion_franquicia as tipo_franquicia','wok_franchise.direccion_franquicia as direccion',
                    'wok_admin_employee.numero_cuenta as cuenta','wok_admin_employee.monetaria_ahorro as tipo_cuenta','wok_admin_employee.monto as salario',
                    'wok_banco.nombre as banco')
                    ->join('wok_type_employee','wok_type_employee.id_type_employee','=','wok_employee.tipo_empleado')
                    ->join('wok_admin_employee','wok_employee.id_employee','=','wok_admin_employee.empleado')
                    ->join('wok_banco','wok_admin_employee.banco','=','wok_banco.id_banco')
                    ->join('users','wok_employee.email','=','users.email')
                    ->join('wok_restaurant','wok_employee.restaurante','=','wok_restaurant.id_restaurant')
                    ->join('wok_franchise','wok_restaurant.franquicia','=','wok_franchise.id_franchise')
                    ->join('wok_type_franchise','wok_type_franchise.id_type_franchise','=','wok_franchise.type_franquicia')
                    ->where('wok_franchise.id_franchise','=',$franquicia->id_franchise)->get();
        }
        return view("owner.empleado.index",compact('empleado'));
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
        $tipo_empleado = TypeEmployee::get();
        $banco = Banco::get();
        return view('owner.empleado.create',compact('franquicias','tipo_empleado','banco'));
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
            $pos = strpos($request['idEmpleado'], '&');
            $idEmpleado = substr($request['idEmpleado'], 0, $pos);
            $rol = substr($request['idEmpleado'],$pos+1);

            $password = substr(md5(uniqid()), 0, 10);
            $user=new User;
            $user->lname = $request['lname'];
            $user->fname = $request['fname'];
            $user->rol = $rol;
            $user->email=$request['email'];
            $user->estado=1;
            $user->password=bcrypt($password);

            $user->save();

            $empleado = new Employee;
            $empleado->primer_nombre =  $request['lname'];
            $empleado->segundo_nombre = $request['segundo_nombre'];
            $empleado->otros_nombres = $request['otros_nombres'];
            $empleado->primer_apellido = $request['fname'];
            $empleado->segundo_apellido = $request['segundo_apellido'];
            $empleado->apallido_casada = $request['apellido_casada'];
            $empleado->documento_identificacion = $request['dpi'];
            $empleado->email = $request['email'];
            $empleado->nit = $request['nit'];
            $empleado->telefono = $request['telefono'];
            $empleado->telefono2 = $request['telefono2'];
            $empleado->restaurante = $request['ifFranchise'];
            $empleado->tipo_empleado = $idEmpleado;
            $empleado->save();

            $admin_employee = new AdminEmployee;
            $admin_employee->numero_cuenta = $request['nocuenta'];
            $admin_employee->monetaria_ahorro = $request['inline-form-radio'];
            $admin_employee->monto = $request['salario'];
            $admin_employee->banco = $request['banco'];
            $admin_employee->empleado = $empleado->id_employee;
            $admin_employee->save();

            $log = [
                'desc'=>'Ingreso un nuevo usuario Empleado '.$rol,
                'email'=>\Auth::user()->email,
                ];
                Log::create($log);
        
            Mail::send('mail.newcount',['password'=>$password], function($msj) use($request,$password){
                $msj->subject('Cuenta creada [WOK - DO Software]');
                $msj->to($request['email']);
            });

            Session::flash('message','Enviado Correctamente');
            return Redirect::to('/gestionEmpleado');
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
        $empleado = Employee::find($id);
        $tipo_empleado = TypeEmployee::get();
        $adminEmployee = AdminEmployee::where('empleado','=',$empleado->id_employee)->first();
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
        $banco = Banco::get();
        return view("owner.empleado.edit", compact('empleado','tipo_empleado', 'adminEmployee','banco','franquicias'));
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
       return  Redirect::to('/gestionEmpleado');
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
            $pos = strpos($request['idEmpleado'], '&');
            $idEmpleado = substr($request['idEmpleado'], 0, $pos);
            $rol = substr($request['idEmpleado'],$pos+1);
            
            $empleado = Employee::find($id);
            $empleado->primer_nombre =  $request['lname'];
            $empleado->segundo_nombre = $request['segundo_nombre'];
            $empleado->otros_nombres = $request['otros_nombres'];
            $empleado->primer_apellido = $request['fname'];
            $empleado->segundo_apellido = $request['segundo_apellido'];
            $empleado->apallido_casada = $request['apellido_casada'];
            $empleado->documento_identificacion = $request['dpi'];
            $empleado->nit = $request['nit'];
            $empleado->telefono = $request['telefono'];
            $empleado->telefono2 = $request['telefono2'];
            if(\Auth::user()->rol == 'Propietario'){
                $empleado->restaurante = $request['ifFranchise'];
            }
            $empleado->tipo_empleado = $idEmpleado;
            $empleado->save();

            $user= User::where('email','=',$empleado->email)->first();
            $user->lname = $request['lname'];
            $user->fname = $request['fname'];
            $user->rol = $rol;

            $user->save();

            $admin_employee = AdminEmployee::where('empleado','=',$empleado->id_employee)->first();
            $admin_employee->numero_cuenta = $request['nocuenta'];
            $admin_employee->monetaria_ahorro = $request['inline-form-radio'];
            $admin_employee->monto = $request['salario'];
            $admin_employee->banco = $request['banco'];
            $admin_employee->save();

            $log = [
                'desc'=>'Edito un usuario Empleado '.$rol,
                'email'=>\Auth::user()->email,
                ];
                Log::create($log);
            return  Redirect::to('/gestionEmpleado');
        }catch(\Illuminate\Database\QueryException $ex){ 
            dd($ex);
            Session::flash('message','Error de actualizacion de empleado');
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
