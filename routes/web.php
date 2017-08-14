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
Route::any('/photos/insert','postsPhotosController@insert')->name('photos.insert');
Route::get('/photos/edit/{id}','postsPhotosController@edit')->name('photos.edit');
Route::post('/photos/update/{id}','postsPhotosController@update')->name('photos.update');
Route::get('/photos/delete/{id}','postsPhotosController@delete')->name('photos.delete');

Route::get('/announcements','anouncementController@index')->name('announcements.index');
Route::get('/announcements/add', 'anouncementController@add')->name('announcements.add');
Route::post('/announcements/insert','anouncementController@insert')->name('announcements.insert');
Route::get('/announcements/delete/{id}','anouncementController@delete')->name('announcements.delete');

Route::get('/departments', 'PageController@departments');

Route::get('/about', 'PageController@about');

Route::get('/research', 'PageController@research');

Route::get('/academic', 'PageController@academic');

Route::get('/departments/civil', 'PageController@civil');

Route::get('/departments/mech', 'PageController@mech');

Route::get('/departments/mecha', 'PageController@mecha');

Route::get('/departments/ec', 'PageController@ec');

Route::get('/departments/ep', 'PageController@ep');

Route::get('/departments/ceit', 'PageController@ceit');

Route::get('/departments/che', 'PageController@che');

Route::get('/departments/archi', 'PageController@archi');

Route::get('/departments/ir', 'PageController@ir');

Route::get('/departments/maths', 'PageController@maths');

Route::get('/departments/eng', 'PageController@eng');

Route::get('/departments/myan', 'PageController@myan');
