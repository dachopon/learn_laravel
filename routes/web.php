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
Route::get('/', 'HomeController@index');

Route::get('user', 'UserController@index');

Route::get('cal--{num1?}--{num2?}', 'HomeController@cal');

Route::get('user/show/{id}', 'UserController@show');

Route::auth();

Auth::routes();

Route::get('/home', 'HomeController@home')->name('home');


