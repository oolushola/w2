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

Route::get('/', 'FrontendController@index');
Route::get('about', 'FrontendController@aboutKaya');
Route::get('blog', 'FrontendController@blogList');
Route::get('blog-details', 'FrontendController@blogDetails');
Route::get('contact-us', 'FrontendController@contact');


// Backend Naviagtions
Route::get('login', 'AdminController@login');
Route::get('admin/dashboard', 'AdminController@dashboard');
Route::resource('admin/company-profile', 'CompanyProfileController');
Route::resource('admin/testimonial', 'FeedbackController');
Route::resource('admin/site-application', 'SiteApplicationController');
Route::resource('admin/services', 'ServicesController');
Route::resource('admin/gallery', 'GalleryController');
