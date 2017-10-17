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

Route::get('/{id?}', 'IndexController@index')->name('main');
Auth::routes();
Route::resource('car', 'CarController');
Route::resource('owner', 'OwnerController');