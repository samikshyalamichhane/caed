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
    Route::middleware('can:View PressRelease')->get('/press-release', 'PressReleaseController@index')->name('PressRelease.index');
    Route::middleware('can:Add PressRelease')->get('/press-release/create', 'PressReleaseController@create')->name('PressRelease.create');
    Route::middleware('can:Add PressRelease')->post('/press-release/create', 'PressReleaseController@store')->name('PressRelease.store');
    Route::middleware('can:Edit PressRelease')->get('/press-release/{id}', 'PressReleaseController@edit')->name('PressRelease.edit');
    Route::middleware('can:Edit PressRelease')->post('/press-release/{id}', 'PressReleaseController@update')->name('PressRelease.update');
    Route::middleware('can:Delete PressRelease')->get('/press-release/{id}/delete', 'PressReleaseController@destroy')->name('PressRelease.delete');
});
