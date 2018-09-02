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

Route::get('/','StaticPagesController@home')->name('home');
Route::get('/help','StaticPagesController@help')->name('help');
Route::get('/about','StaticPagesCOntroller@about')->name('about');

Route::get('/signup','UserController@create')->name('signup');

Route::resource('users','UserController');

Route::get('login','SessionsController@create');
Route::post('login','SessionsController@store');
Route::get('logout','SessionsController@destory');