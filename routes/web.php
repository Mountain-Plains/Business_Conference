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

//login
Route::get('login', 'AdminController@index');
Route::post('adminpanel', 'AdminController@loginCheck');

Route::get('/', 'HomeController@index');
Route::get("/front", function () {
    return view('front');
});

Route::get('file-upload', 'SubmissionController@fileUpload')->name('file.upload');
Route::post('file-upload', 'SubmissionController@fileUploadPost')->name('file.upload.post');

Route::get('schedule', 'ScheduleController@index')->name('Schedule.index');
Route::get('/Ticket', 'TicketController@index');
Route::get('/Sponsor', 'SponsorController@index');

Route::get('/forgot_password', 'Auth\ForgotPasswordController@forgot');
Route::post('/forgot_password', 'Auth\ForgotPasswordController@password');

Route::get('/passwords/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
Route::post('passwords/reset', 'Auth\ResetPasswordController@reset');

Route::group(['middleware' => ['auth', 'admin']], function () {
    //template
    Route::resources(['template' => 'TemplateController',]);
    Route::post('/template/applyTemplate/{id}', 'TemplateController@applyTemplate');

    Route::get('/dashboard', 'AdminController@dashboard');
    Route::get('/admin/Home/List', 'HomeController@list');
    Route::get('/admin/schedule/List', 'ScheduleController@list');
    Route::get('/admin/home-edit/edit/{id}', 'HomeController@edit')->name('home.edit');
    Route::put('/admin/home-edit/update/{id}', 'HomeController@update');
    Route::get('schedule-create', 'ScheduleController@create')->name('schedule.create');
    Route::post('schedule-create', 'ScheduleController@store')->name('schedule.create.post');
    Route::get('/admin/Ticket/List', 'TicketController@list');
    Route::get('/admin/schedule-edit/edit/{id}', 'ScheduleController@edit')->name('schedule.edit');
    Route::put('/admin/schedule-edit/update/{id}', 'ScheduleController@update');
    Route::get('/Ticket-edit/edit/{id}', 'TicketController@edit')->name('ticket.edit');
    Route::put('/Ticket-edit/update/{id}', 'TicketController@update');
    Route::get('/admin/sponsor/List', 'SponsorController@list');
    Route::get('/sponsor-edit/edit/{id}', 'SponsorController@edit')->name('sponsor.edit');
    Route::put('/sponsor-edit/update/{id}', 'SponsorController@update');
    Route::get('/admin/Paper/List', 'DownloadController@list');

    Route::get('/papers/{file}', 'DownloadController@download');

    Route::get('home-create', 'HomeController@create')->name('home.create');
    Route::post('home-create', 'HomeController@store')->name('home.create.post');

    Route::get('/schedule/deleteItem/{id}', 'ScheduleController@destroy');

    Route::get('Ticket-create', 'TicketController@create')->name('Ticket.create');
    Route::post('Ticket-create', 'TicketController@store')->name('Ticket.create.post');

    Route::get('sponsor-create', 'SponsorController@create')->name('Sponsor.create');
    Route::post('sponsor-upload', 'SponsorController@store')->name('Sponsor.create.post');
    Route::get('/sponsor/deleteItem/{id}', 'SponsorController@destroy');

    //update user
    Route::get('/admin/Profile/Users', 'AdminController@getProfile');
    Route::get('/admin/Profile/addNewUser', 'AdminController@addUser');
    Route::post('/admin/Profile/addNewUser', 'AdminController@addNewUser');
    Route::get('/admin/Profile/{id}/updateProfile','AdminController@updateProfile')->name('user.edit');
    Route::get('/admin/Profile/{id}/delete','AdminController@deleteProfile')->name('user.delete');

    Route::put('/admin/Profile/{id}', 'AdminController@update');
    //Log out
    Route::get('logout', 'Auth\LoginController@logout')->name('logout');;
});
