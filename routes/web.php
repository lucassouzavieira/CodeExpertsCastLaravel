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

Route::get('/', "HelloController@hello");

Route::get('/books', "BookController@index")->name('book.index');

Route::get('/bookscreate', "BookController@create")->name('book.create');

Route::get('/books/edit/{id}', "BookController@edit")->name('book.edit');

Route::post('/books', "BookController@store")->name('book.store');

Route::put('/books/{id}', "BookController@update")->name('book.update');

Route::delete('/books/{id}', "BookController@delete")->name('book.delete');
