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
Route::get('schedule', 'ScheduleController@index')->name('Schedule.index');
Route::get('/schedule/deleteItem/{id}','ScheduleController@destroy');
Route::get('/Ticket', 'TicketController@index');
Route::get('Ticket-create', 'TicketController@create')->name('Ticket.create');
Route::post('Ticket-create', 'TicketController@store')->name('Ticket.create.post');
Route::get('/Sponsor', 'SponsorController@index');
Route::get('sponsor-create', 'SponsorController@create')->name('Sponsor.create');
Route::post('sponsor-upload', 'SponsorController@store')->name('Sponsor.create.post');
Route::get('/sponsor/deleteItem/{id}','SponsorController@destroy');

//admin panel
Route::get('admin','AdminController@index');
Route::post('logincheck','AdminController@logincheck')->name('login');

//Template
Route::resources(['template' => 'TemplateController',]);
Route::post('/template/applyTemplate/{id}','TemplateController@applyTemplate');

Route::get('/admin/dashboard', 'AdminController@dashboard');
Route::get('/admin/Home/List', 'HomeController@list');
Route::get('/admin/schedule/List', 'ScheduleController@list');
Route::get('/admin/home-edit/edit/{id}','HomeController@edit')->name('home.edit');
Route::put('/admin/home-edit/update/{id}','HomeController@update');
Route::get('schedule-create', 'ScheduleController@create')->name('schedule.create');
Route::post('schedule-create', 'ScheduleController@store')->name('schedule.create.post');
Route::get('/admin/Ticket/List', 'TicketController@list');
Route::get('/admin/schedule-edit/edit/{id}','ScheduleController@edit')->name('schedule.edit');
Route::put('/admin/schedule-edit/update/{id}','ScheduleController@update');
Route::get('/Ticket-edit/edit/{id}','TicketController@edit')->name('ticket.edit');
Route::put('/Ticket-edit/update/{id}','TicketController@update');
Route::get('/admin/sponsor/List', 'SponsorController@list');
Route::get('/sponsor-edit/edit/{id}','SponsorController@edit')->name('sponsor.edit');
Route::put('/sponsor-edit/update/{id}','SponsorController@update');
Route::get('/admin/Paper/List', 'DownloadController@list');

