<?php


Route::get('/', 'HomeController@index')->name('home'); //HomeController pubblico
Route::get('/posts/{slug}', 'PostController@show')->name('posts.show');
Route::get('/categories/{slug}', 'PostController@postInCategory')->name('posts.category');

Auth::routes();

Route::middleware('auth')->prefix('admin')->namespace('Admin')->name('admin.')->group(function() {
  Route::get('/', 'HomeController@index')->name('home');
  Route::resource('posts', 'PostController');
});
