<?php


Route::get('/', 'HomeController@index'); //HomeController pubblico
Route::get('/posts/{slug}', 'PostController@show')->name('posts.show');

Auth::routes();

Route::middleware('auth')->prefix('admin')->namespace('Admin')->name('admin.')->group(function() {
  Route::get('/', 'HomeController@index')->name('home');
  Route::resource('posts', 'PostController');
});
