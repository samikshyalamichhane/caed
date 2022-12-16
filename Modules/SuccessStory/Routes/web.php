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
    Route::middleware('can:View SuccessStory')->get('/success-story', 'SuccessStoryController@index')->name('SuccessStory.index');
    Route::middleware('can:Add SuccessStory')->get('/success-story/create', 'SuccessStoryController@create')->name('SuccessStory.create');
    Route::middleware('can:Add SuccessStory')->post('/success-story/create', 'SuccessStoryController@store')->name('SuccessStory.store');
    Route::middleware('can:Edit SuccessStory')->get('/success-story/{id}', 'SuccessStoryController@edit')->name('SuccessStory.edit');
    Route::middleware('can:Edit SuccessStory')->post('/success-story/{id}', 'SuccessStoryController@update')->name('SuccessStory.update');
    Route::middleware('can:Delete SuccessStory')->get('/success-story/{id}/delete', 'SuccessStoryController@destroy')->name('SuccessStory.delete');
});
