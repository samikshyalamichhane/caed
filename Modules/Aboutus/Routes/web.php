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

// Route::prefix('aboutus')->group(function() {
//     Route::get('/', 'AboutusController@index');
// });

Route::prefix('admin')->group(function () {
    Route::get('/aboutus', 'AboutusController@index')->name('aboutus.index');
    Route::get('/homepage', 'AboutusController@homePage')->name('aboutus.homePage');
    Route::post('/aboutus/{id}', 'AboutusController@update')->name('aboutus.update');
    Route::post('/aboutus-home/{id}', 'AboutusController@updateHomepage')->name('homepage.update');
    // Route::post('/openingHour', 'AboutusController@saveOpeningHour')->name('aboutus.openingHour');
    // Route::post('/about', 'AboutusController@about')->name('aboutus.about');
    // Route::post('/mission', 'AboutusController@missionVision')->name('aboutus.mission');
});