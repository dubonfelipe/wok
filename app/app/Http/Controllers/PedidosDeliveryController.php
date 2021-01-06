<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Session;
use Redirect;

use DB;
use App\Table;
use App\Log;
use App\DetailsBill;
use App\Pedido;
use App\Bill;
use App\Cliente;
use App\Employee;
use App\TypeEmployee;
class PedidosDeliveryController extends Controller
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
        $mes = strftime("%B");
        $dia = date("d");
        $anio = $dia." ".$mes." de ".strftime("%Y");
        
        $tipoDelivery = TypeEmployee::select('id_type_employee as id')->where('descripcion','=','Delivery')->first();
        $ordenes = Pedido::select('wok_pedido.id_pedido as id','wok_pedido.estado as estado','wok_bill.id_bill as bill',
                            DB::raw('DATE_FORMAT(wok_pedido.created_at, \'%d/%m/%Y %H:%i\') as date'),
                            'wok_pedido.table as total', 'wok_cliente.nombre as cliente','wok_pedido.dirrecion_pedido as direccion',
                            DB::raw('(SELECT CONCAT(wok_employee.primer_nombre,\' \',wok_employee.primer_apellido) FROM wok_employee where wok_employee.id_employee = wok_bill.empleado) as empleado'),
                            DB::raw('(SELECT wok_employee.tipo_empleado FROM wok_employee where wok_employee.id_employee = wok_bill.empleado) as tipoempleado'))
                            ->join('wok_table','wok_pedido.table','=','wok_table.id_table')
                            ->join('wok_bill','wok_pedido.id_pedido','=','wok_bill.pedido')
                            ->join('wok_cliente','wok_pedido.cliente','=','wok_cliente.id_cliente')
                            ->join('wok_restaurant','wok_pedido.restaurante','=','wok_restaurant.id_restaurant')
                            ->join('wok_employee','wok_restaurant.id_restaurant','=','wok_employee.restaurante')
                            ->where('wok_employee.email','=',\Auth::user()->email)
                            ->where('wok_table.servicio','=','DC')
                            ->where('wok_pedido.estado','=','3')
                            
                            ->orderBy('id','DESC')->get();
                            
        $detalles = [];
        $totales = [];
        foreach($ordenes as $item){
            $ite_key = $item->id;
            $bill_detalle = DetailsBill::where('wok_details_bill.bill','=',$item->bill)->get();
            $detalles[$ite_key] = $bill_detalle;
            $total = 0;
            foreach ($bill_detalle as $key => $item) {
                $total+= ($item->precio_unitario * $item->cantidad);
            }        
            $totales[$ite_key] = $total;
        }
       //dd($totales);
       $bigTotal = 0;
        foreach ($totales as $key => $item) {
            $bigTotal+= $item;
        }
        return view('pedidosdelivery.index', compact('anio','ordenes','totales','detalles','bigTotal','tipoDelivery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
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
        $pos = strpos($id, '&');
        $empleado = substr($id, 0, $pos);
        $bill = substr($id,$pos+1);
        $pedido = Bill::find($bill);
        $pedido->empleado = $empleado;
        $pedido->save();
        return Redirect::to('/pedidoDelivery');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bill = $id;
        $employee = DB::table('wok_employee')
                ->where('email','=',Auth::user()->email)
            ->first();
        $franchise = DB::table('wok_restaurant as wr')
            ->join('wok_franchise as wf','wf.id_franchise','=','wr.franquicia')
            ->where('wr.id_restaurant','=',$employee->restaurante)
        ->first();
        $employees = Employee::select('wok_employee.id_employee as id','wok_employee.primer_nombre as name','wok_employee.primer_apellido as lastname','wok_employee.telefono as telefono')
                            ->join('users','wok_employee.email','=','users.email')
                            ->where('wok_employee.restaurante','=',$franchise->id_restaurant)
                            ->where('wok_employee.tipo_empleado','=','4')
                            ->where('users.estado','=','1')->get();

        return view('pedidosdelivery.empleado', compact('employees','bill'));
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
