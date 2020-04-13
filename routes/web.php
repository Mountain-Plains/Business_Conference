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



Route::get('/', 'HomeController@index');
Route::get("/front", function(){
    return view('front');
});
Route::get('file-upload', 'SubmissionController@fileUpload')->name('file.upload');
Route::get('admin.login', 'AdminController@index')->name('admin.login');

Route::post('file-upload', 'SubmissionController@fileUploadPost')->name('file.upload.post');
Route::get('home-create', 'HomeController@create')->name('home.create');
Route::post('home-create', 'HomeController@store')->name('home.create.post');
Route::get('/home-edit/edit/{id}','HomeController@edit');
Route::put('/home-edit/update/{id}','HomeController@update');
Route::get('schedule', 'ScheduleController@index')->name('Schedule.index');
Route::get('schedule-create', 'ScheduleController@create')->name('schedule.create');
Route::post('schedule-create', 'ScheduleController@store')->name('schedule.create.post');


