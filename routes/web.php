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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/create', 'LinksController@create')->name('create');
Route::put('/create', 'LinksController@store')->name('createStore');
Route::get('/redirect', 'LinksController@redirectAjax')->name('redirectAjax');
Route::post('/redirect/{link}', 'LinksController@redirect')->name('redirect');
Route::get('/{link}', 'LinksController@show')->name('show');