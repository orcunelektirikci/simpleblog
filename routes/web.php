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


use App\Category;

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::resource('posts','PostController');
Route::resource('category','CategoryController');
Route::resource('comment','CommentController');
Route::resource('like','LikeController');