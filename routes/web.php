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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contatos','ContatoController@index');
Route::get('/contatos/create','ContatoController@create');
Route::post('/contatos/create','ContatoController@store');
Route::get ('/contatos/edit/{id}','ContatoController@edit');
Route::put ('/contatos/edit/{id}','ContatoController@update');
Route::delete ('/contatos/{id}','ContatoController@destroy');

Route::get('pdf', 'PdfController@geraPdf');
