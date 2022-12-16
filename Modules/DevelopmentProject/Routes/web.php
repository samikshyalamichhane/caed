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
    Route::middleware('can:View DevelopmentProject')->get('/project-category', 'ProjectCategoryController@index')->name('ProjectCategory.index');
    Route::middleware('can:Add DevelopmentProject')->get('/project-category/create', 'ProjectCategoryController@create')->name('ProjectCategory.create');
    Route::middleware('can:Add DevelopmentProject')->post('/project-category/create', 'ProjectCategoryController@store')->name('ProjectCategory.store');
    Route::middleware('can:Edit DevelopmentProject')->get('/project-category/{id}', 'ProjectCategoryController@edit')->name('ProjectCategory.edit');
    Route::middleware('can:Edit DevelopmentProject')->post('/project-category/{id}', 'ProjectCategoryController@update')->name('ProjectCategory.update');
    Route::middleware('can:Delete DevelopmentProject')->get('/project-category/{id}/delete', 'ProjectCategoryController@destroy')->name('ProjectCategory.delete');
});

Route::prefix('admin')->group(function() {
    Route::middleware('can:View DevelopmentProject')->get('/project', 'ProjectController@index')->name('project.index');
    Route::middleware('can:Add DevelopmentProject')->get('/project/create', 'ProjectController@create')->name('project.create');
    Route::middleware('can:Add DevelopmentProject')->post('/project/create', 'ProjectController@store')->name('project.store');
    Route::middleware('can:Edit DevelopmentProject')->get('/project/{id}', 'ProjectController@edit')->name('project.edit');
    Route::middleware('can:Edit DevelopmentProject')->post('/project/{id}', 'ProjectController@update')->name('project.update');
    Route::middleware('can:Delete DevelopmentProject')->get('/project/{id}/delete', 'ProjectController@destroy')->name('project.delete');
});
