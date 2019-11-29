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

Route::get('inicio', 'PagesController@inicio')->name('inicio');

Route::get('fotos', 'PagesController@fotos')->name('fotos');

Route::get('blog', 'PagesController@blog')->name('blog');

Route::get('contantos/detalle/{id}', 'PagesController@detalle')->name('contantos.detalle');

Route::get('contantos/agregar', 'PagesController@for_agregar')->name('form_agregar');

Route::post('contantos/agregar', 'PagesController@agregar')->name('agregar');

Route::get('contantos/editar/{id}', 'PagesController@editar')->name('contactos.editar');

Route::put('contantos/modificar/{id}', 'PagesController@modificar')->name('contactos.modificar');

Route::delete('contantos/eliminar/{id}', 'PagesController@eliminar')->name('contactos.eliminar');

