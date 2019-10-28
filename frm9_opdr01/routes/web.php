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
    return view('home');
});

Route::get('home', function () {
    return view('home');
});



Route::post('/createpost', 'PostsController@store')->name('Create a post');

Route::get('/photos', 'PhotoController@index')->name('photos');
Route::post('/photos', 'PhotoController@pics')->name('pics');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/createpost', 'CreatePostController@index')->name('create post');

Route::get('/deletepost', 'DeletePostController@index')->name('delete post');
Route::post('/deletepost', 'DeletePostController@del')->name('delete post');

Route::get('/updatepost', 'UpdatePostController@index')->name('updatepost');
Route::post('/updatepost', 'UpdatePostController@update')->name('update post');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
