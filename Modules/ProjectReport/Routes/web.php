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
    Route::middleware('can:View Projectreport')->get('/projectreport', 'ProjectReportController@index')->name('projectreport.index');
    Route::middleware('can:Add Projectreport')->get('/projectreport/create', 'ProjectReportController@create')->name('projectreport.create');
    Route::middleware('can:Add Projectreport')->post('/projectreport/create', 'ProjectReportController@store')->name('projectreport.store');
    Route::middleware('can:Edit Projectreport')->get('/projectreport/{id}', 'ProjectReportController@edit')->name('projectreport.edit');
    Route::middleware('can:Edit Projectreport')->post('/projectreport/{id}', 'ProjectReportController@update')->name('projectreport.update');
    Route::middleware('can:Delete Projectreport')->get('/projectreport/{id}/delete', 'ProjectReportController@destroy')->name('projectreport.delete');
});


