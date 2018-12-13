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
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});

Auth::routes();

Route::get('/crear-pregunta', 'PreguntasController@create');
Route::post('/crear-pregunta', 'PreguntasController@store');
Route::get('/presentarPregunta', 'PreguntasController@selectQuestion');
Route::post('/presentarResultado', 'PreguntasController@evaluarResultado');
Route::get('/calcularPuntaje', 'PreguntasController@calcularPuntaje');

