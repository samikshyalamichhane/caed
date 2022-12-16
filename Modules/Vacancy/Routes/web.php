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
    Route::middleware('can:View Vacancy')->get('/vacancy', 'VacancyController@index')->name('vacancy.index');
    Route::middleware('can:Add Vacancy')->get('/vacancy/create', 'VacancyController@create')->name('vacancy.create');
    Route::middleware('can:Add Vacancy')->post('/vacancy/store', 'VacancyController@store')->name('vacancy.store');
    Route::middleware('can:Edit Vacancy')->get('/vacancy/edit/{id}', 'VacancyController@edit')->name('vacancy.edit');
    Route::middleware('can:Edit Vacancy')->post('/vacancy/update/{id}', 'VacancyController@update')->name('vacancy.update');
    Route::middleware('can:Delete Vacancy')->get('/vacancy/{id}/delete', 'VacancyController@destroy')->name('vacancy.delete');
});
