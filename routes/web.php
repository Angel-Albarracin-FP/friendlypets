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

/*
| En esta ruta se muestra la pagina inicial,
| la misma contiene noticias y preguntas frecuentes
| ademas de una seccion de quienes somos
*/
Route::get('/', 'InicioController@index')->name('inicio');

/*
| Rutas para obtener los listados de zonas
| usados en request con Ajax
*/
route::get('/partidos/{id}', 'ZonaController@getPartidos')->name('partidos');

route::get('/localidades/{id}', 'ZonaController@getLocalidades')->name('localidades');


/*
| En esta ruta se muestra el perfil del usuario
| que esta actualmente conectado y tambien todas
| sus publcaciones para poder editarlas y elimnarlas
| 
| Requieren autenticacion
*/
Route::get('/perfil', 'UserController@show')->name('perfil-show');

route::get('/perfil/edit','UserController@edit')->name('perfil-edit');

route::patch('/perfil','UserController@update')->name('perfil-update');

/*
|
|
|
*/
Route::view('/noticia-crear', 'noticia.create')->middleware('auth');


/*
|
|
|
*/
Route::get('/avisos/create', 'AvisoController@create')->name('aviso-create')->middleware('auth');

Route::get('/avisos', 'AvisoController@index')->name('aviso-index');

Route::get('/avisos/{id}', 'AvisoController@show')->name('aviso-show');

Route::get('/avisos/{id}/editar', 'AvisoController@edit')->name('aviso-edit')->middleware('auth');

route::post('/avisos', 'AvisoController@store')->name('aviso-store')->middleware('auth');

route::patch('/avisos/{id}', 'AvisoController@update')->name('aviso-update')->middleware('auth');

route::delete('/avisos/{id}', 'AvisoController@destroy')->name('aviso-delete')->middleware('auth');

/*
Route::get('/avisos', 'AvisoController@show')->name('aviso-show');



Route::get('/avisos', 'AvisoController@edit')->name('aviso-edit');

Route::get('/avisos', 'AvisoController@destroy')->name('aviso-destroy');
*/
Auth::routes();

/* Route::get('/home', 'HomeController@index')->name('home'); */
