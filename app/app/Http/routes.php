<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('start', function () {
    return view('welcome');
});

Route::get('/','HomeController@index');
Route::get('home','HomeController@index')->name('home');
Route::resource('perfil','PerfilController');

// Authentication routes...

Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login','Auth\AuthController@postLogin');

Route::get('logout', 'Auth\AuthController@getLogout');

    //Aquí irían tus rutas
 
//Fel
    //Certificador
    Route::resource('certificators', 'CertificatorsController');    
    Route::post('certificators/delete/{id}','CertificatorsController@deleteCert')->name('certificators.delete');

    //Tipo FEL
    Route::resource('feltypes', 'FELTypesController');
    Route::post('feltypes/delete/{id}','FELTypesController@deleteType')->name('feltypes.delete');

    //Frases
    Route::resource('phrases', 'PhrasesController');
    Route::post('phrases/delete/{id}','PhrasesController@deletePhra')->name('phrases.delete');


//Franquicia
    //tipo franquicia
    Route::resource('typefranchise','TypeFranchiseController');
    //Franquicia
    Route::resource('franchise','FranchiseController');
    Route::resource('franchiseAdmin','FranchiseAdminController');

//Usuarios
    //Administradores
    Route::resource('administrators',"AdministratorController");
    Route::get('adminstrators/addFranchise/{id}','AdministratorController@addFranchise')->name('administrators.add');

    //Owner
    Route::resource('owner','OwnerController');
    Route::get('owner/addFranchise/{id}','OwnerController@addFranchise')->name('owner.add');

    //Type Employee
    Route::resource('typeEmployee','TypeEmployeeController');

//Bancos
    Route::resource('bancos','BancoController');

//Administradores
    Route::resource('ingresoAdministador','AdministradorStartController');
    Route::resource('typeFoods','TypeFoodsController');
    Route::resource('typePrice','TypePriceController');
    Route::resource('recetaMenu','MenuController');
    Route::resource('precio','PrecioController');
    Route::put('precio/{id}/addprecio','PrecioController@addPrecio')->name('precio.addPrecio');

//Owner
    Route::resource('ingresoPropietario','OwnerStartController');
    Route::resource('gestionEmpleado','EmpleadoOwnerController');
    Route::resource('proveedor','ProveedorController');
    Route::resource('negocio','NegocioOwnerController');
    Route::resource('contador','ContadorOwnerController');
    Route::put('negocio/{id}/contador','NegocioOwnerController@contador')->name('negocio.contador');
    Route::resource('pagos','PaymentsController');
    Route::post('pagos/delete/{id}','PaymentsController@deletePayment')->name('pagos.delete');
    Route::get('pagos/meses/enteriores','PaymentsController@beforePayment')->name('pagos.before');
    Route::post('pagos/meses/registros','PaymentsController@registroPayment')->name('pagos.registro');
    Route::get('pagos/constante/{id}','PaymentsController@aggPayments')->name('pagos.agg');
    
//Ordenes
Route::resource('orders', 'OrdersController');
Route::resource('delivery','DeliveryController');
Route::get('orders/show/{id}/{id_bill}', 'OrdersController@showMorePedido')->name('orders.show.more');
Route::post('orders/store/more', 'OrdersController@storeMore')->name('orders.store.more');
Route::resource('viewOrder', 'OrdenesViewController');
Route::resource('pedidoDelivery','PedidosDeliveryController');
//Mesas
Route::resource('tables', 'TablesController');
Route::get('tables/create/{id}', 'TablesController@createTable')->name('tables.create.table');
Route::post('tables/delete','TablesController@deleteTable')->name('tables.delete');
Route::get('tables/bills/{id}','TablesController@getBills')->name('tables.bills');
Route::post('tables/bills/detail/change','TablesController@changeDetailStatus')->name('tables.change.detail');
Route::post('tables/change','TablesController@changeTableStatus')->name('tables.change.table');
Route::post('bill/pay', 'TablesController@payBill')->name('bill.pay');
Route::post('bill/sell', 'TablesController@sellBill')->name('bill.sell');
Route::resource('deleveryPay','DeliveryPayController');
Route::resource('llevarPay','NotHereFoodController');
Route::post('obtener/persona','TablesController@getPersonNit')->name('persona.nit');
//Clientes 
Route::resource('clientes','ClientesController');
Route::resource('contacto','ContactoController');
Route::resource('locacion','LocacionesController');
//Cocinero
Route::resource('wokers','OrderCocineroController');
//Delivery
Route::resource('pedidosDelivery','DeliveryEmployeePedidosController');
Route::resource('pedidosLlevar','FoodGoPedidosController');
//Corte de caja
Route::resource('corteCaja','CorteCajaController');
Route::get('enviar/corte/caja','CorteCajaController@sendCorte')->name('send.cierre');
Route::get('imprimir/corte/caja','CorteCajaController@getReport')->name('print.cierre');