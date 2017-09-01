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

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/contact', 'HomeController@Contact')->name('contact');
Route::get('/about', 'HomeController@About')->name('about');
Route::post('/contact', 'HomeController@Contact')->name('contact');
Route::get('/news', 'PostsController@index')->name('news');
Route::get('/news/{id}', 'PostsController@show')->name('show');
Route::get('/new', 'PostsController@newPost')->name('new');
Route::post('/new', 'PostsController@savePost')->name('new');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'HomeController@admin')->name('admin');
Route::get('/admin/posts', 'Admin\PostsController@index')->name('admin_posts');

Route::get('/admin/posts/remove/{id}', 'Admin\PostsController@remove');
