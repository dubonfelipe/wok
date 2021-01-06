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
use App\TypeEmployee;

class TypeEmployeeController extends Controller
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
        $tipo_empleados = DB::table('wok_type_employee')->get();
        return view("admin.users.empleado.index", compact('tipo_empleados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.users.empleado.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $typeEmployee = new TypeEmployee;
        $typeEmployee->descripcion = $request['empleado'];
        $typeEmployee->save();
        $log = [
            'desc'=>'Ingreso un nuevo tipo de empleado',
            'email'=>\Auth::user()->email,
            ];
            Log::create($log);
        return Redirect::to('/typeEmployee');
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
        $typeEmployee = DB::table('wok_type_employee')
            ->where('id_type_employee', '=', $id)
        ->first();
      //  dd($certificador);
        return view("admin.users.empleado.edit",compact('typeEmployee'));
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
        $typeEmployee = TypeEmployee::find($id);
        $typeEmployee->descripcion = $request['empleado'];
        $typeEmployee->save();
        $log = [
            'desc'=>'Edito el tipo de mpleado',
            'email'=>\Auth::user()->email,
            ];
            Log::create($log);
        return Redirect::to('/typeEmployee');
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
