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

route::get('/imagenes','ImagenController@create')->name('imagenes');

route::post('/imagenes/store','ImagenController@store')->name('imagenes-store');

Route::get('/avisos', function () {
    return view('avisos');
});

Route::get('/noticias', function () {
    return view('inicio.noticias');
});


/*
| En esta ruta se muestra el perfil del usuario
| que esta actualmente conectado y tambien
| todas sus publcaciones para poder editarlas
*/
Route::get('/perfil', 'UserController@index')->name('perfil');

Auth::routes();

/* Route::get('/home', 'HomeController@index')->name('home'); */
