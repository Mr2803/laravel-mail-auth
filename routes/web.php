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

Route::get('/create', "MyController@categoryCreate") -> name("category.create");
Route::post('/store', "MyController@categoryStore") -> name("category.store");

Route::get('/category/post/{id}', 'MyController@categoryPost') -> name('category.post');
Route::post('/category/post/{id}', 'MyController@categoryPostCreate') -> name('category.post.create');

Auth::routes();

Route::get('/login', 'HomeController@index')->name('login');
