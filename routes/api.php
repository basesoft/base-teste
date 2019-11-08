<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::namespace('Api')->group( function(){

	Route::post('/dados/add','DadoController@add');
	Route::get('/dados/list','DadoController@list');
	Route::get('/api/users', function () {
     return Dado::paginate(5); // vai exibir de 10 em 10
	});
	Route::get('/dados/bairro/{bairro}','DadoController@bairro');
	Route::get('/dados/municipio/{municipio}','DadoController@municipio');
	Route::put('/dados/update/{id}','DadoController@update');
	Route::get('/dados/delete/{id}','DadoController@delete');
});