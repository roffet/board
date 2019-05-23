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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PostsController@index')->name('index');

Auth::routes();

Route::get('profile', 'AvatarController@index')->name('profile');

Route::resource('avatar', 'AvatarController');

Route::resource('posts', 'PostsController');

Route::resource('comments', 'CommentsController', ['only' => ['store']]);

// Route::get('/home', 'HomeController@index')->name('home');
