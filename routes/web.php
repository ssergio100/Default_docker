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
Route::get('/teste', function(){
    return view('teste');
});
Route::get('/template', 'HomeController@template');

Route::get('/', 'HomeController@index');

Route::prefix('sobre')->group(function () {
    Route::get('/idealizadora', 'SobreController@idealizadora');
    Route::get('/conheca', 'SobreController@conheca');
    Route::get('/nosso-dna', 'SobreController@nossoDna');
   
});

Route::prefix('proposito')->group(function () {
    Route::get('/corporativo', 'HomeController@corporativo');
    Route::get('/individual', 'HomeController@individual');
});

Route::prefix('coaching')->group(function () {
    Route::get('business-coaching', 'CoachingController@businessCoaching');
    Route::get('cafe-com-coaching', 'CoachingController@cafeCoaching');
    Route::get('coaching-assessment', 'CoachingController@coachingAssessment');
    Route::get('coaching-de-saude', 'CoachingController@coachingSaude');
    Route::get('coaching-para-atletas', 'CoachingController@coachingAtletas');
    Route::get('coaching-vocacional', 'CoachingController@coachingVocacional');
    Route::get('coaching-em-grupo', 'CoachingController@coachingGrupo');
    Route::get('executive-coaching', 'CoachingController@executiveCoaching');
    Route::get('life-coaching', 'CoachingController@lifeCoaching');

});

Route::prefix('servicos')->group(function () {
    Route::get('/coaching', 'ServicoController@coaching');
    Route::get('/treinamentos', 'ServicoController@treinamentos');
    Route::get('/ministrantes-best-sellers', 'ServicoController@ministrante_best_sellers');
    Route::get('/comunicacao-positiva', 'ServicoController@comunicacao_positiva');
});



Route::post('/newsletter', 'NewsletterController@add');
Route::get('/newsletter/{token}', 'NewsletterController@remove');

Route::get('/contato', 'HomeController@contato');
Route::post('/contato', 'ContatoController@add');

                          