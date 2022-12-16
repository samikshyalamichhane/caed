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
    Route::middleware('can:View FundingPartner')->get('/funding-partner', 'FundingPartnerController@index')->name('FundingPartner.index');
    Route::middleware('can:Add FundingPartner')->get('/funding-partner/create', 'FundingPartnerController@create')->name('FundingPartner.create');
    Route::middleware('can:Add FundingPartner')->post('/funding-partner/create', 'FundingPartnerController@store')->name('FundingPartner.store');
    Route::middleware('can:Edit FundingPartner')->get('/funding-partner/{id}', 'FundingPartnerController@edit')->name('FundingPartner.edit');
    Route::middleware('can:Edit FundingPartner')->post('/funding-partner/{id}', 'FundingPartnerController@update')->name('FundingPartner.update');
    Route::middleware('can:Delete FundingPartner')->get('/funding-partner/{id}/delete', 'FundingPartnerController@destroy')->name('FundingPartner.delete');
});

