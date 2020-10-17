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

Route::get('/show/{id}', [
    'as' => 'show', 'uses' => 'CarController@showAction'
]);

Route::get('/insert', [
    'as' => 'insert', 'uses' => 'CarController@insertAction'
]);

Route::get('/update/{id}', [
    'as' => 'update', 'uses' => 'CarController@updateAction'
]);

Route::get('/delete/{id}', [
    'as' => 'delete', 'uses' => 'CarController@deleteAction'
]);

Route::get('/showall', [
    'as' => 'showall', 'uses' => 'CarController@showAllAction'
]);
