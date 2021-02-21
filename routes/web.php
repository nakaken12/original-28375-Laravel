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

Route::get('/', 'PostsController@index')->name('post.index');

Route::get('post/index', 'PostsController@index')->name('post.index');

Route::group(['prefix' => 'post', 'middleware' => 'auth'], function(){
    Route::get('create', 'PostsController@create')->name('post.create');
    Route::post('store', 'PostsController@store')->name('post.store');
    Route::get('edit/{id}', 'PostsController@edit')->name('post.edit');
    Route::post('update/{id}', 'PostsController@update')->name('post.update');
    Route::post('destroy/{id}', 'PostsController@destroy')->name('post.destroy');
});

Route::resource('/users', 'UsersController', ['only' => ['show']]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('post/index/genre=アニメ', 'PostsController@anime');

Route::get('post/index/genre=アクション', 'PostsController@action');

Route::get('post/index/genre=アドベンチャー', 'PostsController@adventure');

Route::get('post/index/genre=SF', 'PostsController@sf');

Route::get('post/index/genre=キッズ・ファミリー', 'PostsController@kids');

Route::get('post/index/genre=コメディ', 'PostsController@comedy');

Route::get('post/index/genre=サスペンス', 'PostsController@suspense');

Route::get('post/index/genre=時代劇', 'PostsController@historical');

Route::get('post/index/genre=青春', 'PostsController@youth');

Route::get('post/index/genre=戦争', 'PostsController@war');

Route::get('post/index/genre=ドキュメンタリー', 'PostsController@documentary');

Route::get('post/index/genre=ドラマ', 'PostsController@drama');

Route::get('post/index/genre=ファンタジー', 'PostsController@fantasy');

Route::get('post/index/genre=ホラー', 'PostsController@horror');

Route::get('post/index/genre=ミュージカル・音楽', 'PostsController@musical');

Route::get('post/index/genre=恋愛', 'PostsController@love');