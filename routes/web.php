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
Route::get('/template', 'HomeController@template');

Route::get('/', 'HomeController@index');

Route::get('/contato', 'HomeController@contato');

Route::prefix('sobre')->group(function () {
    Route::get('/idealizador', 'HomeController@idealizador');
    Route::get('/conheca', 'HomeController@idealizador');
    Route::get('/dna', 'HomeController@missao');
   
});

Route::prefix('proposito')->group(function () {
    Route::get('/corporativo', 'HomeController@corporativo');
    Route::get('/individual', 'HomeController@individual');
});

Route::prefix('servicos')->group(function () {
    Route::get('/coaching', 'HomeController@coaching');
    Route::get('/treinamento', 'HomeController@treinamento');
    Route::get('/ministrante', 'HomeController@ministrante');
    Route::get('/comunicacao-positiva', 'HomeController@ComunicacaoPositiva');
});