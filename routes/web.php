<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

//Route::get('/productos', 'TblProductoController@index');
//Route::get('/productos/create', 'TblProductoController@create');
//Route::get('/', 'TblProductoController@get');

Route::get('/', 'TblProductoController@get');
Route::get('/desactivar/{id}','TblProductoController@estado_desactivado');
Route::get('/activar/{id}','TblProductoController@estado_activo');
Route::get('/ver/{id}','TblProductoController@ver');
Route::get('/comprando/{id}','TblProductoController@estado_comprando');
Route::get('/desactivar_compra/{id}','TblProductoController@desactivar_compra');
Route::get('/carrito','TblProductoController@ver_carrito');
Route::get('/generar_boleta','TblFacturaController@get_id');
Route::get('/valida_cliente','TblClienteController@valida_cliente');

Route::resource('productos', 'TblProductoController');
Route::resource('proveedores', 'TblProveedorController');
Route::resource('categorias', 'TblCategoriaController');
Route::resource('clientes', 'TblClienteController');
Route::resource('detalle', 'TblDetalleController');



//Route::get('/home', 'HomeController@index')->name('home');
