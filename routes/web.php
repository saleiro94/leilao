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
Route::get('/novosLeiloes','PecaController@index');
Route::get('/novosContactos','PagesController@novosContactos');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/adicionarpeca/create','PecaController@create');

//Routes para resources, CRUD inclui GET,POST,PUT,DELETE
Route::resource('/novosContactos', 'ContactosController');
Route::resource('/adicionarpeca', 'PecaController');
Route::resource('/novosLeiloes','PecaController');
Auth::routes();