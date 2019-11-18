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

Route::get('/', 'HomeController@index');

Route::get('/visao', 'HomeController@index');

Route::get('/contato', 'HomeController@index');

Route::prefix('sobre')->group(function () {
    Route::get('/missao', 'HomeController@missao');
    Route::get('/visao', 'HomeController@visao');
    Route::get('/valores', 'HomeController@valores');
    Route::get('/idealizador', 'HomeController@idealizador');
});

Route::prefix('proposito')->group(function () {
    Route::get('/corporativo', 'HomeController@corporativo');
    Route::get('/indeividual', 'HomeController@indeividual');
});

Route::prefix('servicos')->group(function () {
    Route::get('/coaching', 'HomeController@coaching');
    Route::get('/treinamento', 'HomeController@treinamento');
    Route::get('/ministrante', 'HomeController@ministrante');
});