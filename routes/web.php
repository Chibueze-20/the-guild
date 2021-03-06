<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PagesController@index');
Route::get('signup', 'PagesController@signup');
Route::get('login', 'PagesController@login');
Route::post('register', 'UserController@storeUser');
Route::post('login', 'UserController@loginUser');
Route::get('logout', 'UserController@destroy');
Route::get('/home', 'UserController@index');
