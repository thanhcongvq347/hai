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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', 'App\Http\Controllers\HomeController@index');
Route::get('/themsach', 'App\Http\Controllers\HomeController@create');
Route::post('/luusach', 'App\Http\Controllers\HomeController@store');
Route::get('/hienthisach/{id}', 'App\Http\Controllers\HomeController@edit');
Route::get('/capnhat/{id}', 'App\Http\Controllers\HomeController@update');
Route::get('/xoasach/{id}', 'App\Http\Controllers\HomeController@destroy');
