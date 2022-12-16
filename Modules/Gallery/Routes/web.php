<?php
use Modules\Gallery\Http\Controllers\ImageGalleryController;
use Modules\Gallery\Http\Controllers\ImageController;
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
   Route::get('gallery/editImage/{id}','ImageGalleryController@edit')->name('gallery.edit');
   Route::get('gallery/createImage','ImageGalleryController@create')->name('gallery.create');
   Route::get('gallery/image/index','ImageGalleryController@index')->name('gallery.index');
   Route::post('gallery/image/store','ImageGalleryController@store')->name('gallery.store');
   Route::post('gallery/image/update/{id}','ImageGalleryController@update')->name('gallery.update');
   Route::get('gallery/image/delete/{id}','ImageGalleryController@destroy')->name('gallery.delete');

   Route::get('images/create/{id}','ImageController@create')->name('add.images');
   Route::post('images/store','ImageController@store')->name('images.store');
   Route::get('images/delete/{id}','ImageController@destroy')->name('images.delete');
});

Route::prefix('admin')->group(function() {
   Route::get('gallery/video/edit/{id}','VideoGalleryController@edit')->name('video.edit');
   Route::get('gallery/video/create','VideoGalleryController@create')->name('video.create');
   Route::get('gallery/video/index','VideoGalleryController@index')->name('video.index');
   Route::post('gallery/video/store','VideoGalleryController@store')->name('video.store');
   Route::post('gallery/video/update/{id}','VideoGalleryController@update')->name('video.update');
   Route::get('gallery/video/delete/{id}','VideoGalleryController@destroy')->name('video.delete');

   Route::get('video/create/{id}','VideoController@create')->name('add.videos');
   Route::post('video/store','VideoController@store')->name('videos.store');
   Route::get('video/delete/{id}','VideoController@destroy')->name('videos.delete');
});

