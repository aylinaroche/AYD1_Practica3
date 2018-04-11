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

Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', 'Auth\LoginController@showLoginForm'); //Para que solo el invitado pueda ver esta pag

Route::post('login','Auth\LoginController@login')->name('login');
Route::get('Logout','Auth\LoginController@logout')->name('Logout');
Route::get('Registrarse','Auth\RegisterController@showRegisterForm')->name('Registrarse');
Route::post('Register','Auth\RegisterController@register')->name('Register');

//
Route::get('Inicio', 'InicioController@inicio')->name('Inicio');
Route::get('Transferencia', 'TransferenciaController@transferencia')->name('Transferencia');
Route::get('Credito', 'CreditoController@credito')->name('Credito');
Route::get('Debito', 'DebitoController@debito')->name('Debito');
//
Route::post('transferir','TransferenciaController@transferir')->name('transferir');
Route::post('acreditar','CreditoController@acreditar')->name('acreditar');
Route::post('debitar','DebitoController@debitar')->name('debitar');