<?php

use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', 'EnderecoController@index')->name('home');

Route::get('/buscar', 'EnderecoController@buscar')->name('buscar');

Route::post('/salvar', 'EnderecoController@salvar')->name('salvar');

Route::get('/adicionar', 'EnderecoController@adicionar')->name('adicionar');
