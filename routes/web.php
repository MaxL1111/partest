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

Route::get('/', 'MainController@index');

Route::get('/777555', 'MainController@pars777555');

Route::get('/zeonnb/export/', 'MainController@export');
Route::get('/zeonnb/store/', 'MainController@storeExcel');