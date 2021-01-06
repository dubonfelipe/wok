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
use App\TypePrice;
use App\Restaurant;
use Response;
use Mail;

class OwnerController extends Controller
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
        $owners = User::where('rol', '=', 'Propietario')->get();
        
        return view("admin.users.owner.index",compact('owners'));
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
        return view("admin.users.owner.create", compact('franchise_type', 'type_price'));
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
            $user->rol = 'Propietario';
            $user->email=$request['email'];
            $user->estado=1;
            $user->password=bcrypt($password);

            $user->save();

            $propietario = new Owner;
            $propietario->primer_nombre = $request['fname'];
            $propietario->primer_apellido = $request['lname'];
            $propietario->email = $request['email'];
            $propietario->documento_identificacion = '000';
            $propietario->telefono = 0;

            $propietario->save();
            
            $franquicia = new Franchise;
            $franquicia->direccion_franquicia = 'null';
            $franquicia->type_franquicia = $request['ifFranchise'];
            $franquicia->owner = $propietario->id_owner;
            $franquicia->persona_contable = 1;
            $franquicia->type_price = $request['idTypePrice'];

            $franquicia->save();

            $restaurant = new Restaurant;
            $restaurant->franquicia = $franquicia->id_franchise;
            $restaurant->save();
            
            $log = [
                'desc'=>'Ingreso un nuevo usuario Propietario',
                'email'=>\Auth::user()->email,
                ];
                Log::create($log);
        
            Mail::send('mail.newcount',['password'=>$password], function($msj) use($request,$password){
                $msj->subject('Cuenta creada [WOK - DO Software]');
                $msj->to($request['email']);
            });

            Session::flash('message','Enviado Correctamente');
            return Redirect::to('/owner');
        }catch(\Illuminate\Database\QueryException $ex){ 
            dd($ex);
            Session::flash('message','El correo ingresado ya se encuentra registrado en el sistema');
            Redirect::to(route('owner.create'));
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
        $owner = Owner::where('email','=',$id)->first();
       $nombre_completo = $owner->primer_nombre." ".$owner->segundo_nombre." ".$owner->otros_nombres." ".$owner->primer_apellido." ".$owner->segundo_apellido." ".$owner->apallido_casada;
       $dpi = ($owner->documento_identificacion == '000') ? 'Sin información' : $owner->documento_identificacion ;
       $franquicias = Franchise::join('wok_type_franchise','wok_franchise.type_franquicia','=','wok_type_franchise.id_type_franchise')
                            ->join('wok_type_price','wok_franchise.type_price','=','wok_type_price.id_type_price')
                            ->where('owner','=',$owner->id_owner)->get();
       //dd($franquicias);
        return view("admin.users.owner.edit", compact('owner','nombre_completo', 'dpi','franquicias'));
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
       return  Redirect::to('/owner');
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
        dd($request);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    }

    public function addFranchise($id){
        $franchise_type = DB::table('wok_type_franchise')->get();
        $type_price = DB::table('wok_type_price')->get();
        $id_owner = $id;
        return view("admin.franquicia.franchise.create", compact('franchise_type', 'type_price', 'id_owner'));
    }
}
