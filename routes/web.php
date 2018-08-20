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

Route::get('/atividades/create', 'AtividadeController@create');
Route::post('/atividades', 'AtividadeController@store');

Route::get('/atividades', 'AtividadeController@index');

Route::get('/mensagens', 'MensagemController@index');

Route::get('/atividades/{id}', 'AtividadeController@show');

Route::get('/mensagens/{id}', 'MensagemController@show');

