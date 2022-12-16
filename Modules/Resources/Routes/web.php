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

Route::prefix('admin')->group(function () {
    Route::middleware('can:View Resource')->get('/resource', 'ResourcesController@index')->name('resource.index');
    Route::middleware('can:Add Resource')->get('/resource/create', 'ResourcesController@create')->name('resource.create');
    Route::middleware('can:Add Resource')->post('/resource/create', 'ResourcesController@store')->name('resource.store');
    Route::middleware('can:Edit Resource')->get('/resource/{id}', 'ResourcesController@edit')->name('resource.edit');
    Route::middleware('can:Edit Resource')->post('/resource/{id}', 'ResourcesController@update')->name('resource.update');
    Route::middleware('can:Delete Resource')->get('/resource/{id}/delete', 'ResourcesController@destroy')->name('resource.delete');
});
