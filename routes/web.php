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

Route::get('/','TodosController@index');

Route::resource('todo', 'TodosController');

Route::post('/store','TodosController@store');

Route::post('/update/{id}','TodosController@update');

Route::post('/destroy/{id}','TodosController@destroy');
