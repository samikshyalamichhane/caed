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
    Route::middleware('can:View Publication')->get('/publication_category', 'PublicationCategoryController@index')->name('publicationCategory.index');
    Route::middleware('can:Add Publication')->get('/publication-category/create', 'PublicationCategoryController@create')->name('publicationCategory.create');
    Route::middleware('can:Add Publication')->post('/publication-category/store', 'PublicationCategoryController@store')->name('publicationCategory.store');
    Route::middleware('can:Edit Publication')->get('/publication-category/edit/{id}', 'PublicationCategoryController@edit')->name('publicationCategory.edit');
    Route::middleware('can:Edit Publication')->post('/publication-category/update/{id}', 'PublicationCategoryController@update')->name('publicationCategory.update');
    Route::middleware('can:Delete Publication')->get('/publication-category/{id}/delete', 'PublicationCategoryController@destroy')->name('publicationCategory.delete');
});
Route::prefix('admin')->group(function() {
    Route::middleware('can:View Publication')->get('/publication-subCategory', 'PublicationSubCategoryController@index')->name('publicationSubCategory.index');
    Route::middleware('can:Add Publication')->get('/publication-subCategory/create', 'PublicationSubCategoryController@create')->name('publicationSubCategory.create');
    Route::middleware('can:Add Publication')->post('/publication-subCategory/store', 'PublicationSubCategoryController@store')->name('publicationSubCategory.store');
    Route::middleware('can:Edit Publication')->get('/publication-subCategory/edit/{id}', 'PublicationSubCategoryController@edit')->name('publicationSubCategory.edit');
    Route::middleware('can:Edit Publication')->post('/publication-subCategory/update/{id}', 'PublicationSubCategoryController@update')->name('publicationSubCategory.update');
    Route::middleware('can:Delete Publication')->get('/publication-subCategory/{id}/delete', 'PublicationSubCategoryController@destroy')->name('publicationSubCategory.delete');
    Route::middleware('can:View Publication')->post('subcat', 'PublicationSubCategoryController@subCat')->name('subCat');
});

Route::prefix('admin')->group(function() {
    Route::middleware('can:View Publication')->get('/publication', 'PublicationController@index')->name('publication.index');
    Route::middleware('can:Add Publication')->get('/publication/create', 'PublicationController@create')->name('publication.create');
    Route::middleware('can:Add Publication')->post('/publication/store', 'PublicationController@store')->name('publication.store');
    Route::middleware('can:Edit Publication')->get('/publication/edit/{id}', 'PublicationController@edit')->name('publication.edit');
    Route::middleware('can:Edit Publication')->post('/publication/update/{id}', 'PublicationController@update')->name('publication.update');
    Route::middleware('can:Delete Publication')->get('/publication/{id}/delete', 'PublicationController@destroy')->name('publication.delete');
});
