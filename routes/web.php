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
//Route::auth();

Route::get('/post/new', 'HomeController@index')->name('home');

// ログイン用
Route::post('/authenticate', 'Auth\LoginController@authenticate')->name('authenticate');
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

// ユーザー登録用
//Route::get('/register/new', 'Auth\RegisterController@register')->name('register');
Route::post('/register/confirm', 'Auth\RegisterController@create')->name('create');


Route::get('/post/new', 'PostImageController@post')->name('post');
