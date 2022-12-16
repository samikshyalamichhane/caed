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
    Route::middleware('can:View MediaClipping')->get('/media-clipping', 'MediaClippingController@index')->name('MediaClipping.index');
    Route::middleware('can:Add MediaClipping')->get('/media-clipping/create', 'MediaClippingController@create')->name('MediaClipping.create');
    Route::middleware('can:Add MediaClipping')->post('/media-clipping/create', 'MediaClippingController@store')->name('MediaClipping.store');
    Route::middleware('can:Edit MediaClipping')->get('/media-clipping/{id}', 'MediaClippingController@edit')->name('MediaClipping.edit');
    Route::middleware('can:Edit MediaClipping')->post('/media-clipping/{id}', 'MediaClippingController@update')->name('MediaClipping.update');
    Route::middleware('can:Delete MediaClipping')->get('/media-clipping/{id}/delete', 'MediaClippingController@destroy')->name('MediaClipping.delete');
});
