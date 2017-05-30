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

Route::get('/product_view/{id}', 'ProductViewController@index');

Route::post('/product_view/{id}', 'ProductViewController@addComment');

Route::get('/tag/{id}', 'TagController@index');

Route::get('/user/{id}', 'UserController@index');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
