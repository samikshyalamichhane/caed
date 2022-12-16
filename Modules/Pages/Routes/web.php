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
    Route::middleware('can:View Page')->get('/page', 'PagesController@index')->name('page.index');
    Route::middleware('can:Add Page')->get('/page/create', 'PagesController@create')->name('page.create');
    Route::middleware('can:Add Page')->post('/page/create', 'PagesController@store')->name('page.store');
    Route::middleware('can:Edit Page')->get('/page/{id}', 'PagesController@edit')->name('page.edit');
    Route::middleware('can:Edit Page')->post('/page/{id}', 'PagesController@update')->name('page.update');
    Route::middleware('can:Delete Page')->get('/page/{id}/delete', 'PagesController@destroy')->name('page.delete');
});
