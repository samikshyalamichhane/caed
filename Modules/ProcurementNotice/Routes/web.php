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
    Route::middleware('can:View ProcurementNotice')->get('/procurement-notice', 'ProcurementNoticeController@index')->name('ProcurementNotice.index');
    Route::middleware('can:Add ProcurementNotice')->get('/procurement-notice/create', 'ProcurementNoticeController@create')->name('ProcurementNotice.create');
    Route::middleware('can:Add ProcurementNotice')->post('/procurement-notice/create', 'ProcurementNoticeController@store')->name('ProcurementNotice.store');
    Route::middleware('can:Edit ProcurementNotice')->get('/procurement-notice/{id}', 'ProcurementNoticeController@edit')->name('ProcurementNotice.edit');
    Route::middleware('can:Edit ProcurementNotice')->post('/procurement-notice/{id}', 'ProcurementNoticeController@update')->name('ProcurementNotice.update');
    Route::middleware('can:Delete ProcurementNotice')->get('/procurement-notice/{id}/delete', 'ProcurementNoticeController@destroy')->name('ProcurementNotice.delete');
});

