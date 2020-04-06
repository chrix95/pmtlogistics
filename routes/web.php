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

Route::get('/', 'PagesController@index')->name('welcome');
Route::get('about', 'PagesController@about')->name('about');
Route::prefix('services')->group(function () {
  Route::get('/', 'PagesController@services')->name('services');
  Route::get('{slug}', 'PagesController@servicesTemplate')->name('services.template');
});
Route::get('faqs', 'PagesController@faqs')->name('faqs');
Route::get('testimonial', 'PagesController@testimonial')->name('testimonial');
Route::get('contact', 'PagesController@contact')->name('contact');
// Tracking routes
Route::post('tracking', 'PagesController@tracking')->name('tracking');
Route::get('tracking/{trackingRef}', 'PagesController@trackingRef')->name('tracking.ref');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
