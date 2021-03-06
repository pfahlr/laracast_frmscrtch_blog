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
Route::get('/', function(){ return view('home'); })->name('home_page');

Route::get('/posts', 'PostController@index')->name('posts');
Route::get('/posts/create', 'PostController@create');
Route::post('/posts', 'PostController@store');
Route::get('/posts/{post}', 'PostController@show')->name('show_post');


Route::post('comments/{post}', 'CommentController@store')->name('store_comment');

Route::get('/register', 'RegistrationController@create')->name('registration_create');
Route::post('/register', 'RegistrationController@store')->name('registration_store');


Route::get('/login', 'SessionController@create')->name('session_create');
Route::post('/login', 'SessionController@store')->name('session_store');

Route::get('/logout', 'SessionController@destroy')->name('session_destroy');

