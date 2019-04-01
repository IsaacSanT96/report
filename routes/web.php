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
    return redirect()->route('login');
});

Route :: get('/report', 'ReportController@index')->name('report');
Route :: post('/teste', 'ReportController@store')->name('store');
Route::get('/tecnicosCampo','TecnicoCampoController@index')->name('tecnico');
Route::get('/chamados','ChamadoController@index')->name('chamado');
Route:: get('projeto', 'ProjetoController@index')->name('projeto');

Auth::routes();

Route::get('/login', 'HomeController@index')->name('login');
Route::get('/inbox', 'InboxController@index')->name('inbox');
Route::get('/usuario','UsuarioController@index')->name('usuario');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');