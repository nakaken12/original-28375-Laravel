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

Route::get('/', function () {
    return view('post.index');
});

Route::group(['prefix' => 'post', 'middleware' => 'auth'], function(){
    Route::get('create', 'PostsController@create')->name('post.create');
    Route::post('store', 'PostsController@store')->name('post.store');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
