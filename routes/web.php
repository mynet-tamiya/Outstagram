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

Auth::routes();

Route::get('/post/new', 'HomeController@index')->name('home'); // /home
//Route::post('/upload', 'HomeController@upload');

// ログイン用
Route::post('/authenticate', 'Auth\LoginController@authenticate')->name('authenticate');
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

// ユーザー登録用
//Route::get('/register/new', 'Auth\RegisterController@register')->name('register');
Route::post('/register/confirm', 'Auth\RegisterController@create')->name('create');

// 画像投稿画面用
Route::get('/post/new', 'PostImageController@index')->name('post');
Route::get('/post/complete', 'PostImageController@complete')->name('complete');
Route::post('/post/upload', 'PostImageController@upload');

//Route::post('/post/complete', 'CompleteController@index');


