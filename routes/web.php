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

Route::put('proposal/setujui/{proposal}', 'ProposalController@setujui');
// Auth::routes();


Route::group(['middleware' => 'revalidate'], function()
{
    // Routes yang mau di revalidate masukan di sini
    Route::resource('proposal', 'ProposalController');
    Auth::routes();
    Route::get('/home', 'HomeController@index');
});