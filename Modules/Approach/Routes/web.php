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
    Route::middleware('can:View Approach')->get('/approach', 'ApproachController@index')->name('approach.index');
    Route::middleware('can:Add Approach')->get('/approach/create', 'ApproachController@create')->name('approach.create');
    Route::middleware('can:Add Approach')->post('/approach/create', 'ApproachController@store')->name('approach.store');
    Route::middleware('can:Edit Approach')->get('/approach/{id}', 'ApproachController@edit')->name('approach.edit');
    Route::middleware('can:Edit Approach')->post('/approach/{id}', 'ApproachController@update')->name('approach.update');
    Route::middleware('can:Delete Approach')->get('/approach/{id}/delete', 'ApproachController@destroy')->name('approach.delete');
});
