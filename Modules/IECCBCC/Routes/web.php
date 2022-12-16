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
    Route::middleware('can:View IECCBCC')->get('/material-category', 'MaterialCategoryController@index')->name('materialCategory.index');
    Route::middleware('can:Add IECCBCC')->get('/material-category/create', 'MaterialCategoryController@create')->name('materialCategory.create');
    Route::middleware('can:Add IECCBCC')->post('/material-category/create', 'MaterialCategoryController@store')->name('materialCategory.store');
    Route::middleware('can:Edit IECCBCC')->get('/material-category/{id}', 'MaterialCategoryController@edit')->name('materialCategory.edit');
    Route::middleware('can:Edit IECCBCC')->post('/material-category/{id}', 'MaterialCategoryController@update')->name('materialCategory.update');
    Route::middleware('can:Delete IECCBCC')->get('/material-category/{id}/delete', 'MaterialCategoryController@destroy')->name('materialCategory.delete');
});

Route::prefix('admin')->group(function() {
    Route::middleware('can:View IECCBCC')->get('/material', 'MaterialController@index')->name('material.index');
    Route::middleware('can:Add IECCBCC')->get('/material/create', 'MaterialController@create')->name('material.create');
    Route::middleware('can:Add IECCBCC')->post('/material/create', 'MaterialController@store')->name('material.store');
    Route::middleware('can:Edit IECCBCC')->get('/material/{id}', 'MaterialController@edit')->name('material.edit');
    Route::middleware('can:Edit IECCBCC')->post('/material/{id}', 'MaterialController@update')->name('material.update');
    Route::middleware('can:Delete IECCBCC')->get('/material/{id}/delete', 'MaterialController@destroy')->name('material.delete');
});
