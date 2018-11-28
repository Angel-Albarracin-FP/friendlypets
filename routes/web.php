<?php

/*
| En esta ruta se muestra la pagina inicial,
| la misma contiene noticias y preguntas frecuentes
| ademas de una seccion de quienes somos
*/
Route::get('/', 'InicioController@index')->name('inicio.index');

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
| Requieren autenticacion desde el UserController
*/
Route::get('/perfil', 'UserController@show')->name('perfil.show');
route::get('/perfil/edit','UserController@edit')->name('perfil.edit');
route::patch('/perfil','UserController@update')->name('perfil.update');

//Rutas de Noticias
Route::get('/noticia/{id}', 'NoticiaController@show')->name('noticia.show');

Route::middleware('auth')->group(function()
{
  // Rutas de avisos
  Route::get('/avisos/crear', 'AvisoController@create')->name('aviso.create')->middleware('permission:aviso.create');
  route::post('/avisos', 'AvisoController@store')->name('aviso.store')->middleware('permission:aviso.create');
  Route::get('/avisos/{id}/editar', 'AvisoController@edit')->name('aviso.edit')->middleware('permission:aviso.edit');
  route::patch('/avisos/{id}', 'AvisoController@update')->name('aviso.update')->middleware('permission:aviso.edit');
  route::delete('/avisos/{id}', 'AvisoController@destroy')->name('aviso.delete')->middleware('permission:aviso.edit');
  // Rutas de noticias
  Route::get('/noticia/create', 'NoticiaController@create')->name('noticia.create')->middleware('permission:noticia.create');
  Route::post('/noticia', 'NoticiaController@store')->name('noticia.store')->middleware('permission:noticia.create');
  Route::get('/noticia/{id}/editar', 'NoticiaController@edit')->name('noticia.edit')->middleware('permission:noticia.edit');
  Route::patch('/noticia/{id}', 'NoticiaController@update')->name('noticia.update')->middleware('permission:noticia.edit');
  Route::delete('/noticia/{id}', 'NoticiaController@destroy')->name('noticia.destroy')->middleware('permission:noticia.edit');
  // Rutas de voluntarios
  Route::get('/voluntarios', 'VoluntarioController@index')->name('voluntario.index')->middleware('permission:voluntario.index');
  Route::get('/voluntarios/{id}', 'VoluntarioController@show')->name('voluntario.show')->middleware('permission:voluntario.show');
  // Listado de usuarios
  Route::get('/usuarios', 'UserController@index')->name('user.index')->middleware('permission:user.index');
});

//Rutas de avisos
Route::get('/avisos', 'AvisoController@index')->name('aviso.index');
Route::get('/avisos/{id}', 'AvisoController@show')->name('aviso.show');

Auth::routes();
