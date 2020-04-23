<?php

use Illuminate\Support\Facades\Route;

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

Route::resource('/notas', 'NotaController');

Route::get('/editar/{id}', 'NotaController@editar' )->name('notas.editar');

Route::PUT('/editar/{id}', 'NotaController@update' )->name('notas.update');

Route::delete('/eliminar/{id}', 'NotaController@eliminar' )->name('notas.eliminar');

Route::get('/home', 'HomeController@index')->name('home');
