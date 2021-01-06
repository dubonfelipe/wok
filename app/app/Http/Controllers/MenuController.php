<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Session;
use Redirect;

use DB;
use App\Menu;
use App\Receta;
use App\Ingrediente;
use App\Price;
use App\TypePrice;
use App\TypeFoods;
use App\Administrador;
use App\TypeFranchise;
use App\Log;
use App\MenuHasTypeFranchise;
class MenuController extends Controller
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
        $menu = Menu::select('wok_menu.id_menu as id','wok_menu.descripcion as menu', 'wok_type_foods.descripcion as tipoplatillo',
                        DB::raw('(SELECT GROUP_CONCAT(wok_type_franchise.descripcion_franquicia separator \'**\') from wok_type_franchise
                        INNER JOIN wok_menu_has_type_franchise on wok_type_franchise.id_type_franchise = wok_menu_has_type_franchise.type_franquicia
                        WHERE wok_menu_has_type_franchise.menu = wok_menu.id_menu) as franquicias'),
                        DB::raw('(SELECT GROUP_CONCAT(CONCAT(wok_price.monto) separator \'**\') from wok_price
                        INNER JOIN wok_type_price on wok_price.type_price = wok_type_price.id_type_price
                        WHERE wok_price.menu = wok_menu.id_menu) as preciosNum'),
                        DB::raw('(SELECT GROUP_CONCAT(CONCAT(wok_price.monto, \'(\', wok_type_price.descripcion, \')\',\'&\',wok_price.id_price) separator \'**\') from wok_price
                        INNER JOIN wok_type_price on wok_price.type_price = wok_type_price.id_type_price
                        WHERE wok_price.menu = wok_menu.id_menu) as precios'), DB::raw('replace(wok_receta.descripcion_proceso,\'\r\n\',\'\') as receta'), 'wok_receta.tiempo_preparacion as tiempo',
                        DB::raw('(SELECT GROUP_CONCAT(wok_ingrediente.nombre_ingrediente separator \'**\') from wok_ingrediente
                        INNER JOIN wok_receta on wok_receta.id_receta = wok_ingrediente.receta
                        WHERE wok_receta.menu = wok_menu.id_menu) as ingredientes'))
                        ->join('wok_type_foods', 'wok_menu.type_foods','=','wok_type_foods.id_type_foods')
                        ->join('wok_receta', 'wok_menu.id_menu', '=','wok_receta.menu')
                        ->whereRaw('wok_menu.id_menu in (SELECT wok_menu_has_type_franchise.menu from wok_menu_has_type_franchise INNER JOIN wok_type_franchise on wok_menu_has_type_franchise.type_franquicia = wok_type_franchise.id_type_franchise
                        INNER JOIN wok_administrador_has_type_franchise on wok_type_franchise.id_type_franchise = wok_administrador_has_type_franchise.type_franquicia
                        INNER JOIN wok_administrador on wok_administrador_has_type_franchise.administrador = wok_administrador.id_administrador
                        WHERE wok_administrador.email = \''.\Auth::user()->email.'\')')->get();

       return view('administrador.menu.index', compact('menu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){
        $type_price = TypePrice::get();
        $type_franchise = TypeFranchise::join('wok_administrador_has_type_franchise','wok_administrador_has_type_franchise.type_franquicia','=','wok_type_franchise.id_type_franchise')
                        ->join('wok_administrador','wok_administrador.id_administrador','=','wok_administrador_has_type_franchise.administrador')
                        ->where('wok_administrador.email','=',\Auth::user()->email)->get();
        $type_foods = TypeFoods::get();
        return view('administrador.menu.create',compact('type_price','type_franchise','type_foods'));
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
            $file = $request->file('file');
            if($file != null){
                $nombre = $file->getClientOriginalName();
                \Storage::disk('local')->put($nombre,  \File::get($file));
            }
            $menu = new Menu;
            $menu->descripcion = $request['platillo'];
            $menu->resumen = $request['resumen'];
            $menu->type_foods = $request['tipoPlatillo'];
            $menu->img = $nombre;
            $menu->save();

            foreach($request['states'] as $row){
                $franquicia = new MenuHasTypeFranchise;
                $franquicia->menu = $menu->id_menu;
                $franquicia->type_franquicia = $row;
                $franquicia->save();
            }
            $precio = new Price;
            $precio->monto = $request['precio'];
            $precio->type_price = $request['tipoPrecio'];
            $precio->menu = $menu->id_menu;
            $precio->save();

            $receta = new Receta;
            $receta->descripcion_proceso = $request['receta'];
            $receta->tiempo_preparacion = $request['tiempo'];
            $receta->menu = $menu->id_menu;
            $receta->save();

            foreach(explode(',',$request['ingredientes']) as $row){
                $ingredientes = new Ingrediente;
                $ingredientes->nombre_ingrediente = $row;
                $ingredientes->cantidad = 0;
                $ingredientes->medida="null";
                $ingredientes->receta=$receta->id_receta;
                $ingredientes->save();
            }

            Session::flash('message','Registro guardado');
            $this->flag = false;
            return Redirect::to('/recetaMenu');
        }catch(\Illuminate\Database\QueryException $ex){ 
            Session::flash('message','Conflicto a ingresar registro');
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
        $type_price = TypePrice::get();
        $type_franchise = TypeFranchise::join('wok_administrador_has_type_franchise','wok_administrador_has_type_franchise.type_franquicia','=','wok_type_franchise.id_type_franchise')
                        ->join('wok_administrador','wok_administrador.id_administrador','=','wok_administrador_has_type_franchise.administrador')
                        ->where('wok_administrador.email','=',\Auth::user()->email)->get();
        $type_foods = TypeFoods::get();
        $menu = Menu::find($id);
        $receta = Receta::select('descripcion_proceso as proceso','tiempo_preparacion as tiempo',
                        DB::raw('(SELECT GROUP_CONCAT(wok_ingrediente.nombre_ingrediente separator \',\') from wok_ingrediente
                        WHERE wok_receta.id_receta = wok_ingrediente.receta) as ingredientes'))->where('menu','=',$menu->id_menu)->first();
        $franquicias = MenuHasTypeFranchise::select('type_franquicia')->where('wok_menu_has_type_franchise.menu','=',$menu->id_menu)->get();
        $franquiciaText = array();
        foreach($franquicias as $item){
            array_push ($franquiciaText,$item->type_franquicia  );
        }
        return view('administrador.menu.edit',compact('type_price','type_franchise','type_foods','menu','receta','franquiciaText'));
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
            $file = $request->file('file');
            if($file != null){
                $nombre = $file->getClientOriginalName();
                \Storage::disk('local')->put($nombre,  \File::get($file));
            }
            $menu = Menu::find($id);
            $menu->descripcion = $request['platillo'];
            $menu->resumen = $request['resumen'];
            $menu->type_foods = $request['tipoPlatillo'];
            if($file != null){
                $menu->img = $nombre;
            }
            $menu->save();

            $receta = Receta::where('menu','=',$menu->id_menu)->first();
            $receta->descripcion_proceso =  $request['receta'];
            $receta->tiempo_preparacion = $request['tiempo'];
            $receta->save();

            $ingredientes = Ingrediente::where('receta','=',$receta->id_receta);
            $ingredientes->delete();

            foreach(explode(',',$request['ingredientes']) as $row){
                $ingredientes = new Ingrediente;
                $ingredientes->nombre_ingrediente = $row;
                $ingredientes->cantidad = 0;
                $ingredientes->medida="null";
                $ingredientes->receta=$receta->id_receta;
                $ingredientes->save();
            }

            $franquicias = MenuHasTypeFranchise::where('menu','=',$menu->id_menu);
            $franquicias->delete();

            foreach($request['states'] as $row){
                $franquicia = new MenuHasTypeFranchise;
                $franquicia->menu = $menu->id_menu;
                $franquicia->type_franquicia = $row;
                $franquicia->save();
            }

            return Redirect::to('/recetaMenu');
        }catch(\Illuminate\Database\QueryException $ex){ 
            Session::flash('message','Error al realizar actualización de menú');
            return Redirect::to('/recetaMenu');
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
