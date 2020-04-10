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


Route::get('/submissions', function () {
    return view('submissions');
});

Route::resource('login','AdminController');

Route::post('submissions', 'paperViewController@reviewUpdatePost')->name('paper.update.post');
Route::get('/Paper/{file}', 'DownloadController@download');



Route::get('file-upload', 'SubmissionController@fileUpload')->name('file.upload');
Route::post('file-upload', 'SubmissionController@fileUploadPost')->name('file.upload.post');


Route::resource('login','AdminController');

Route::resource('template','TemplateController');

Route::get('template/create','TemplateController@create');
//Route::post('template/save','TemplateController@store');


