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
Route::get('/todo', 'todoController@index');
Route::post('/todo','todoController@save');

Route::get('/show', 'todoController@indexShow');
Route::post('/show','todoController@show');

Route::get('/delete/{id}','todoController@delete');

Route::get('/update/{id}','todoController@update');
Route::post('/update','todoController@edit');

Route::get('/remind', 'todoController@remindV');
Route::post('/remind','todoController@remind');