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


Route::get('/forgot_password','Auth\ForgotPasswordController@forgot');

