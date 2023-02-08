<?php

use Modules\Frontend\Http\Controllers\FrontendController;
use Modules\Frontend\Http\Controllers\GalleryController;
use Modules\Frontend\Http\Controllers\PartnerController;

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

Route::get('/', [FrontendController::class,'index'])->name('index');
Route::get('/contact', [FrontendController::class,'contact'])->name('contact');
Route::get('/about', [FrontendController::class,'about'])->name('about');
Route::get('/who-we-are', [FrontendController::class,'whoWeAre'])->name('whoWeAre');
Route::get('/approaches-and-strategies', [FrontendController::class,'approachesAndStrategy'])->name('approachesAndStrategy');
Route::get('/support-and-donate', [FrontendController::class,'supportAndDonate'])->name('supportAndDonate');
Route::get('/resources', [FrontendController::class,'resources'])->name('resources');
Route::get('/volunteer', [FrontendController::class,'volunteer'])->name('volunteer');
Route::post('/volunteer',[FrontendController::class,'postVolunteer'])->name('volunteer.post');
Route::get('/publications', [FrontendController::class,'publications'])->name('publications');
Route::get('/project-reports', [FrontendController::class,'projectReports'])->name('projectReports');
Route::get('/vacancies', [FrontendController::class,'vacancyList'])->name('vacancyList');
Route::get('/news', [FrontendController::class,'newsList'])->name('newsList');
Route::get('/news/{slug}', [FrontendController::class,'newsInner'])->name('newsInner');
Route::get('/issues-and-themes', [FrontendController::class,'issueAndThemes'])->name('issueAndThemes');
Route::get('/projects/{slug}', [PartnerController::class,'projectDetails'])->name('projectDetail');
Route::get('/project', [PartnerController::class,'projects'])->name('projects');
Route::get('/partners', [PartnerController::class,'partners'])->name('partners');
Route::get('/galleries', [GalleryController::class,'galleries'])->name('galleries');
Route::get('/gallery/{slug}', [GalleryController::class,'galleryInner'])->name('galleryInner');


Route::post('/contact', [FrontendController::class,'contactSave'])->name('contactSave');

