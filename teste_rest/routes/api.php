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

Route::namespace('API')->name('api.')->group(function(){
    Route::prefix('properties')->group(function(){

        Route::get('/', 'PropertyController@index')->name('index_properties');
        Route::get('/{id}', 'PropertyController@show')->name('single_properties');
        Route::post('/', 'PropertyController@store')->name('store_properties');
        Route::put('/{id}', 'PropertyController@update')->name('update_properties');
        Route::delete('/{id}', 'PropertyController@delete')->name('delete_properties');

    });
});