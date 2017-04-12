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
Auth::routes();

Route::get('/', 'HomeController@index');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/perfil', 'PerfilController@perfil');
Route::post('/perfil','PerfilController@update');
Route::post('/perfil/foto','PerfilController@atualizarfoto');
Route::get('/perfil/foto','PerfilController@perfilfoto');
Route::get('/verperfil/{id}','PerfilController@verperfil');
Route::get('/perfil/cidade','PerfilController@atualizarcidade');