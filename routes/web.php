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
Route::get('/kategoriyalar/{post}/izoxlar', 'PostCommentController@index');
Route::get('/sahifa', 'UsersController@index');
Route::get('/bosh-vrach', function () {
    return view('pages.vrach');
})->name('vrach');
Route::get('/xodimlar', 'EmployeesController@index')->name('employee');
Route::group(['middleware' => ['auth']], function () {
    Route::delete('/kategoriyalar/{post}/izoxlar/{comment}', 'PostCommentController@delete');
    Route::post('/kategoriyalar/{post}/izoxlar', 'PostCommentController@create');
});
