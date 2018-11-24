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



route::get('/','PagesController@index');

route::get('/novosLeiloes','PagesController@novos');

route::get('/novosContactos','PagesController@novosContactos');
Route::resource('/novosContactos', 'ContactosController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

route::get('/adicionarPeça', 'PeçaController@Peça');
