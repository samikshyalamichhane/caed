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
    Route::middleware('can:View Announcement')->get('/announcement', 'AnnouncementController@index')->name('announcement.index');
    Route::middleware('can:Add Announcement')->get('/announcement/create', 'AnnouncementController@create')->name('announcement.create');
    Route::middleware('can:Add Announcement')->post('/announcement/create', 'AnnouncementController@store')->name('announcement.store');
    Route::middleware('can:Edit Announcement')->get('/announcement/{id}', 'AnnouncementController@edit')->name('announcement.edit');
    Route::middleware('can:Edit Announcement')->post('/announcement/{id}', 'AnnouncementController@update')->name('announcement.update');
    Route::middleware('can:Delete Announcement')->get('/announcement/{id}/delete', 'AnnouncementController@destroy')->name('announcement.delete');
});

