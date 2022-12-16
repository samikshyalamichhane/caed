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
    Route::middleware('can:View Network')->get('/network', 'NetworkController@index')->name('network.index');
    Route::middleware('can:Add Network')->get('/network/create', 'NetworkController@create')->name('network.create');
    Route::middleware('can:Add Network')->post('/network/create', 'NetworkController@store')->name('network.store');
    Route::middleware('can:Edit Network')->get('/network/{id}', 'NetworkController@edit')->name('network.edit');
    Route::middleware('can:Edit Network')->post('/network/{id}', 'NetworkController@update')->name('network.update');
    Route::middleware('can:Delete Network')->get('/network/{id}/delete', 'NetworkController@destroy')->name('network.delete');
});
