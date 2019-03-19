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
//----------------------------------------------
Route::get('palafox', function () {
    return 'Hello World';
});
//---------------------------------------------
Route::get('user/{nombre?}', function ($nombre="Por favor inserta tu nombre") {
    return 'User: '.$nombre;
});
//------------------------------------------
Route::get('libros','librosController@index');
//--------------------------------------------
Route::resource('carreras','CarrerasController');
	Route::get('m.carreras','CarrerasController@m_index');
Route::resource('libros','librosController');
Route::resource('users','UsersController')->middleware('auth');
Route::resource('direcciones','DireccionsController');
Route::get('nuevaDireccion/{user_id}','DireccionsController@guardarDireccion');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
