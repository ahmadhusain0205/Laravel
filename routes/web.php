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

Route::get('/', 'PagesController@Home');
Route::get('/About', 'PagesController@About');
Route::get('/Book', 'BookController@index');
Route::get('/User', 'UserController@index');
Route::get('/User/{user}', 'UserController@show');
Route::post('/Book', 'BookController@store');
