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


//Routes GET
Route::get('/','PagesController@index');
//Route::get('/novosLeiloes','PecaController@index');
Route::get('/novosContactos','PagesController@novosContactos');
Route::get('/dashboard', 'DashboardController@index');
Route::get('/adicionarpeca/create','PecaController@create');
Route::get('/adicionarartesao/create','ArtesaoController@create');
Route::get('/licitar/create/{id}','LanceController@create');
Route::get('licitar/{id}', 'LanceController@mostrar');
Route::get('/meusLeiloes','PecaController@mostrarMeus');
Route::get('/adicionarregiao/create','RegiaoController@create');
Route::get('/filtrarLeiloes','PecaController@filtrar');


//Routes para resources, CRUD inclui GET,POST,PUT,DELETE
Route::resource('/novosContactos', 'ContactosController');
Route::resource('/adicionarpeca', 'PecaController');
Route::resource('/adicionarartesao', 'ArtesaoController');
Route::resource('/adicionarregiao','RegiaoController');
Route::resource('/licitar','LanceController');

Auth::routes();