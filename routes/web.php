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

Route::get('/', function () {
    return view('welcome');
});

Route::get('login','AdminController@index');
Route::post('logincheck','AdminController@logincheck');
//Route::get('resetpassword','AdminController@resetpassword');
//

Route::get('/submissions', function () {
    return view('submissions');
});

Route::get('/papers/{file}', 'DownloadController@download');

Route::get('file-upload', 'SubmissionController@fileUpload')->name('file.upload');
Route::post('file-upload', 'SubmissionController@fileUploadPost')->name('file.upload.post');

Route::resource('template','TemplateController');

Route::get('template/create','TemplateController@create');
//Route::post('template/save','TemplateController@store');


Route::get('/forgot_password','Auth\ForgotPasswordController@forgot');
Route::post('/forgot_password','Auth\ForgotPasswordController@password');

Route::get('/passwords/reset/{token}','Auth\ResetPasswordController@showResetForm');
Route::post('passwords/reset','Auth\ResetPasswordController@reset');


