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

//Route Home
Route::get('/', 'PagesController@index');
Route::get('/bantuan', 'PagesController@bantuan');
Route::get('/tentang', 'PagesController@tentang');
