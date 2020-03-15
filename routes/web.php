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

Route::get('/autoru', 'MainController@parsAutoru');

//экспорт данных из таблицы БД в exel и отдает пользователю
//Route::get('/zeonnb/export/', 'MainController@export');

//экспорт данных из таблицы БД в exel и загружает на диск сервера
Route::get('/zeonnb/store/', 'MainController@storeExcel');

//скачивание пользователем файлов с сервера
Route::get('/download/{file_name}', 'MainController@getDownload');