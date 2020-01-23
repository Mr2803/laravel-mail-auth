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

Route::get('/', "MyController@index") -> name("home.index");
Route::get('/category/show/{id}', "MyController@categoryShow") -> name("category.show") ->middleware('auth');
Route::get('/delete/{id}', "MyController@categoryDelete") -> name("category.delete");

Route::get('/create', "MyController@categoryCreate") -> name("category.create") -> middleware('auth');
Route::post('/store', "MyController@categoryStore") -> name("category.store") -> middleware('auth');

Route::get('/category/post/{id}', 'MyController@categoryPost') -> name('category.post') -> middleware('auth');
Route::post('/category/post/{id}', 'MyController@categoryPostCreate') -> name('category.post.create') -> middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
