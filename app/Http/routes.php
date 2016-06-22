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


Route::get('/login','LogController@loadLogin'); 
Route::get('/admin','Inicio@index'); 
Route::get('/getClientes','ClientesController@getClientes');
Route::get('/clientes','ClientesController@loadMainView');
Route::get('/equipo','ClientesController@getEquipo');
Route::get('/deleteCustomer','ClientesController@deleteClient');
Route::get('/newCustomer','ClientesController@insertClient');
Route::get('/updateCustomer','ClientesController@updateClient');