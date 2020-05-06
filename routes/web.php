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

Route::get('/', function () {
    return view('welcome');
});

Route::get('clientes' , 'PaginasController@clientes');

Route::get('prestamos' ,'PaginasController@prestamos');

Route::get('pagos' ,'PaginasController@pagos');

Route::get('resumen' ,'PaginasController@resumen');
