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

Route::get('/','postsController@index');
Route::get('/posts','postsController@index')->name('posts.index');
Route::get('/posts/details/{id}','postsController@details')->name('posts.details');
Route::get('/posts/add', 'postsController@add')->name('posts.add');
Route::post('/posts/insert','postsController@insert')->name('posts.insert');
Route::get('/posts/edit/{id}','postsController@edit')->name('posts.edit');
Route::post('/posts/update/{id}','postsController@update')->name('posts.update');
Route::get('/posts/delete/{id}','postsController@delete')->name('posts.delete');


Route::get('/photos','postsPhotosController@index')->name('photos.index');
Route::get('/photos/details/{id}','postsPhotosController@details')->name('photos.details');
Route::get('/photos/add', 'postsPhotosController@add')->name('photos.add');
Route::post('/photos/insert','postsPhotosController@insert')->name('photos.insert');
Route::get('/photos/edit/{id}','postsPhotosController@edit')->name('photos.edit');
Route::post('/photos/update/{id}','postsPhotosController@update')->name('photos.update');
Route::get('/photos/delete/{id}','postsPhotosController@delete')->name('photos.delete');