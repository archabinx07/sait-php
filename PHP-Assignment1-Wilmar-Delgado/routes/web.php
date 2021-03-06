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

Route::get('/', 'PostsController@index');
Route::get('/demo', 'PostsController@demo');
Route::get('/contact', 'ContactController@index');
Route::get('/post/{id}/like', 'PostsController@toggleLike');

Route::get('/profile', 'ProfileController@index');
Route::post('/profile', 'ProfileController@update');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/{id}', 'PostsController@index');
