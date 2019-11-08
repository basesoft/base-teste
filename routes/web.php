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

Route::get('/listar','ImovelController@listar')->name('listarImoveis');
Route::get('/cadastrar','ImovelController@cadastrar')->name('cadastrarImovel');
Route::get('/editar','ImovelController@editar')->name('editarImovel');
Route::get('/remover','ImovelController@remover')->name('removerImovel');