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

//Route Pages
Route::get('/', 'PagesController@index');
Route::get('/bantuan', 'PagesController@bantuan');
Route::get('/tentang', 'PagesController@tentang');

//Route Resource Proposal
Route::resource('proposal', 'ProposalController');
Route::put('proposal/setujui/{proposal}', 'ProposalController@setujui');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
