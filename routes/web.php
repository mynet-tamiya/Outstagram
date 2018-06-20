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
//    echo "welcome";
    return view('welcome');
});

Auth::routes();

Route::post('/', 'HomeController@index')->name('home');

// ログイン用
//Route::post('/show', 'Auth\LoginController@show');
Route::post('/login', 'Auth\LoginController@login')->name('login');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');

// ユーザー登録用
//Route::get('/register/new', 'Auth\RegisterController@create')->name('register');
//Route::post('/register/confirm', 'Auth\RegisterController@register');

//// パスリセット用
//Route::get('password/reset', 'Auth\ForgotPasswordController@show')->name('password.request');
//Route::post('password/email', 'Auth\ForgotPasswordController@send')->name('password.email');
//Route::get('password/reset/{token}', 'Auth\ResetPasswordController@show')->name('password.reset');
//Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::post('/post/new', 'PostImageController@post')->name('post');
Route::post('/post/complete', 'PostImageController@complete')->name('complete');

