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

Route::prefix('admin')->group(function() {
    Route::middleware('can:View Category')->get('/category', 'CategoryController@index')->name('category.index');
    Route::middleware('can:Add Category')->get('/category/create', 'CategoryController@create')->name('category.create');
    Route::middleware('can:Add Category')->post('/category/create', 'CategoryController@store')->name('category.store');
    Route::middleware('can:Edit Category')->get('/category/{id}', 'CategoryController@edit')->name('category.edit');
    Route::middleware('can:Edit Category')->post('/category/{id}', 'CategoryController@update')->name('category.update');
    Route::middleware('can:Delete Category')->get('/category/{id}/delete', 'CategoryController@destroy')->name('category.delete');
});

Route::prefix('admin')->group(function() {
    Route::middleware('can:View Link')->get('/link', 'LinkController@index')->name('link.index');
    Route::middleware('can:Add Link')->get('/link/create', 'LinkController@create')->name('link.create');
    Route::middleware('can:Add Link')->post('/link/create', 'LinkController@store')->name('link.store');
    Route::middleware('can:Edit Link')->get('/link/{id}', 'LinkController@edit')->name('link.edit');
    Route::middleware('can:Edit Link')->post('/link/{id}', 'LinkController@update')->name('link.update');
    Route::middleware('can:Delete Link')->get('/link/{id}/delete', 'LinkController@destroy')->name('link.delete');
});
