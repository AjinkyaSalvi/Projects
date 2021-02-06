<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', 'CitydataContoller@home_data')->name('home');
Route::post('/contact_us_email_btn', 'CitydataContoller@store_contact')->name('footer_contactfrm');
Route::post('/home', 'CitydataContoller@register_user');
Route::post('/login_frm_btn', 'CitydataContoller@checklogin')->name('login_process');

Route::get('/AboutUs', 'DynamicdataController@aboutus')->name('AboutUs');
Route::get('/Team', 'DynamicdataController@team')->name('Team');
Route::get('/contactus', 'DynamicdataController@contactus')->name('contactus');

Route::get('/admindashboard', 'DashboardController@admindashboard')->name('admindashboard');
  Route::post('/edit_event', 'DashboardController@redirect_editevent')->name('edit_event');
  Route::post('edit_blog', 'DashboardController@redirect_editblog')->name('edit_blog');
  Route::post("/event_update_btn", 'DashboardController@update_event')->name('updateevent');
  Route::post("/blog_update_btn", 'DashboardController@update_blog')->name('updateblog');

  Route::post("/blog_add_btn", 'DashboardController@insertblog')->name('insertblog');
  Route::post("/event_add_btn", 'DashboardController@insertevent')->name('insertevent');

  Route::post('contactus_full', 'CitydataContoller@contact_us_full')->name('contact_us_fullsubmit');

Route::post("/register_event", 'DashboardController@regiterforevent')->name('register_event');
Route::get('/logout' , 'CitydataContoller@logout')->name('logout');

// Edit 'Home' Data
Route::get('/homeedit','DynamicAdminEdit@homedataedit')->name('home_edit');
Route::post('edit_objectives','DynamicAdminEdit@updatehomedata')->name('home_update');

// Edit 'Our Values' Data
Route::get('/valuesedit','DynamicAdminEdit@ourvaluesdataedit')->name('values_edit');
Route::post('edit_our','DynamicAdminEdit@updateourvaluesdata')->name('values_update');

// Edit 'About Us' Data
Route::get('/aboutusedit','DynamicAdminEdit@aboutusdataedit')->name('about_us_edit');
Route::post('edit_aboutus','DynamicAdminEdit@updateaboutussdata')->name('about_us_update');

// Edit 'Contact Us' Data
Route::get('/contactusedit','DynamicAdminEdit@contactusdataedit')->name('contact_us_edit');
Route::post('edit_contactus','DynamicAdminEdit@updatecontactussdata')->name('contact_us_update');
