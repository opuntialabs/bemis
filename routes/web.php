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

Route::get('/', 'ApplicationController@index');
Route::get('/mercado/{market}', 'MarketController@show');
Route::get('/contacto', function () {
    return view('site.contacto');
});

Auth::routes();