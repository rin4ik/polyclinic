<?php

use App\Post;

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
Route::post('/login', 'HomeController@index');
Auth::routes();
Route::get('/kategoriyalar/{slug}', 'CategoryController@show')->name('category.show');
Route::get('/yangiliklar/{category}/{post}', 'HomeController@show')->name('post.show');
Route::get('/yangiliklar', 'HomeController@news')->name('posts');
Route::get('/kategoriyalar/{post}/izoxlar', 'PostCommentController@index');
Route::get('/sahifa', 'UsersController@index');
Route::get('/bosh-vrach', function () {
    return view('pages.vrach');
})->name('vrach');
Route::get('/xodimlar', function () {
    return view('pages.employee');
})->name('employee');
Route::get('/mahalla', function () {
    return view('pages.mahalla');
})->name('employee');
Route::get('/fotolar', function () {
    $post = Post::all()->pluck('image');

    return view('pages.foto', compact('post'));
});
Route::get('/aloqa', function () {
    return view('pages.contact');
});
Route::group(['middleware' => ['auth']], function () {
    Route::delete('/kategoriyalar/{post}/izoxlar/{comment}', 'PostCommentController@delete');
    Route::post('/kategoriyalar/{post}/izoxlar', 'PostCommentController@create');
});
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'admin'], function () {
    Route::get('/', 'DashboardController@index');
    Route::resource('/categories', 'CategoriesController');
    Route::resource('/posts', 'PostsController');
    Route::resource('/users', 'UsersController');
    Route::delete('/comments/{comment}/destroy', 'CommentsController@destroy')->name('comments.destroy');
});
