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

Route::get('/', 'HomeController@index');
Auth::routes();
Route::get('/kategoriyalar/{slug}', 'CategoryController@show')->name('category.show');
Route::get('/yangiliklar/{category}/{post}', 'HomeController@show')->name('post.show');
Route::get('/yangiliklar', 'HomeController@news')->name('posts');
Route::get('/kategoriyalar/{slug}/izoxlar', 'PostCommentController@index');
Route::get('/sahifa', 'UsersController@index');
