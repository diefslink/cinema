<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
| post,get,put,delete
*/

Route::get('/','FrontController@index');
Route::get('contacto.php','FrontController@contacto');
Route::get('reviews.php','FrontController@reviews');
Route::get('admin','FrontController@admin');


Route::resource('usuario','UsuarioController');
Route::resource('genero','GenresController');
Route::get('generos','GenresController@listing');
Route::resource('log','LogController');
Route::get('logout','LogController@logout');

Route::resource('movie','MovieController');
Route::get('movies','MovieController@listing');
