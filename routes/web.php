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

Route::get('/admin', 'AdminController@admin')
    ->middleware('admin')
    ->name('admin');



Auth::routes();

Route::get('/user/verify/{Verification_token}', 'Auth\RegisterController@verify')
     ->name('verify');

Route::get('/', 'HomeController@index')
     ->name('home');

Route::resource('/post', 'PostController');

//Route:: resource('/post/comment/store','PostController@commentadd');
Route::post('/comment/store', 'CommentController@store')
     ->name('comment.store');

Route::any('/test', 'TestingController@test');



