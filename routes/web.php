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
Route::resource('productos', 'TblProductoController');
Route::resource('proveedores', 'TblProveedorController');
Route::resource('categorias', 'TblCategoriaController');
Route::resource('clientes', 'TblClienteController');
Route::resource('facturas', 'TblFacturaController');

//Route::get('/home', 'HomeController@index')->name('home');
