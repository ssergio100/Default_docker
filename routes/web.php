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

Route::prefix('servico')->group(function () {
    Route::get('/business-coaching', 'ServicoController@businessCoaching');
    Route::get('/cafe-com-coaching', 'ServicoController@cafeCoaching');
    Route::get('/coaching-assessment', 'ServicoController@coachingAssessment');
    Route::get('/coaching-de-saude', 'ServicoController@coachingSaude');
    Route::get('/coaching-para-atletas', 'ServicoController@coachingAtletas');
    Route::get('/coaching-vocacional', 'ServicoController@coachingVocacional');
    Route::get('/coaching-em-grupo', 'ServicoController@coachingGrupo');
    Route::get('/executive-coaching', 'ServicoController@executiveCoaching');
    Route::get('/life-coaching', 'ServicoController@lifeCoaching');

});