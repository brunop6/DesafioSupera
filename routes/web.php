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

Route::get('/', 'App\Http\Controllers\DicaController@index');

Route::get('/usuarios/create', 'App\Http\Controllers\UsuarioController@create');
Route::post('/usuarios', 'App\Http\Controllers\UsuarioController@store');

Route::get('/usuarios', 'App\Http\Controllers\UsuarioController@index');

Route::post('/auth', 'App\Http\Controllers\UsuarioController@auth');
Route::get('/usuarios/logoff', 'App\Http\Controllers\UsuarioController@logoff');

Route::get('/dicas/create', 'App\Http\Controllers\DicaController@create');
Route::post('/dicas', 'App\Http\Controllers\DicaController@store');