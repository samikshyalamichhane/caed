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
    Route::middleware('can:View NewsEvent')->get('/newsevent', 'NewsEventsController@index')->name('newsevent.index');
    Route::middleware('can:Add NewsEvent')->get('/newsevent/create', 'NewsEventsController@create')->name('newsevent.create');
    Route::middleware('can:Add NewsEvent')->post('/newsevent/create', 'NewsEventsController@store')->name('newsevent.store');
    Route::middleware('can:Edit NewsEvent')->get('/newsevent/{id}', 'NewsEventsController@edit')->name('newsevent.edit');
    Route::middleware('can:Edit NewsEvent')->post('/newsevent/{id}', 'NewsEventsController@update')->name('newsevent.update');
    Route::middleware('can:Delete NewsEvent')->get('/newsevent/{id}/delete', 'NewsEventsController@destroy')->name('newsevent.delete');
});

