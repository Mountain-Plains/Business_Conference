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
Route::post('file-upload', 'SubmissionController@fileUploadPost')->name('file.upload.post');
Route::get('home-create', 'HomeController@create')->name('home.create');
Route::post('home-create', 'HomeController@store')->name('home.create.post');
Route::get('/home-edit/edit/{id}','HomeController@edit');
Route::put('/home-edit/update/{id}','HomeController@update');
Route::get('schedule', 'ScheduleController@index')->name('Schedule.index');
Route::get('schedule-create', 'ScheduleController@create')->name('schedule.create');
Route::post('schedule-create', 'ScheduleController@store')->name('schedule.create.post');
Route::get('/schedule-edit/edit/{id}','ScheduleController@edit');
Route::put('/schedule-edit/update/{id}','ScheduleController@update');
Route::get('/schedule/deleteItem/{id}','ScheduleController@destroy');
Route::get('/Ticket', 'TicketController@index');
Route::get('Ticket-create', 'TicketController@create')->name('Ticket.create');
Route::post('Ticket-create', 'TicketController@store')->name('Ticket.create.post');
Route::get('/Ticket-edit/edit/{id}','TicketController@edit');
Route::put('/Ticket-edit/update/{id}','TicketController@update');
Route::get('/Sponsor', 'SponsorController@index');
Route::get('sponsor-create', 'SponsorController@create')->name('Sponsor.create');
Route::post('sponsor-upload', 'SponsorController@store')->name('Sponsor.create.post');
Route::get('/sponsor-edit/edit/{id}','SponsorController@edit');
Route::put('/sponsor-edit/update/{id}','SponsorController@update');
Route::get('/sponsor/deleteItem/{id}','SponsorController@destroy');

//Template
Route::resources([
    'template' => 'TemplateController',
]);
Route::post('/template/applyTemplate','TemplateController@applyTemplate');

Route::delete('template/{id}', [
    'as' => 'template.destroy',
    'uses' => 'TemplateController@destroy'
]);

Route::post('template/{id}', [
    'as' => 'template.edit',
    'uses' => 'TemplateController@edit'
]);
