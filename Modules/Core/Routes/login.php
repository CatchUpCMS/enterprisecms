<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your module. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::get('login', 'Auth\AuthController@webLogin');
    Route::post('login', ['as'=>'web-login','uses'=>'Auth\AuthController@webLoginPost']);
    Route::get('/staff/login', 'StaffAuth\AuthController@adminLogin');
    Route::post('/staff/login', ['as'=>'admin-login','uses'=>'StaffAuth\AuthController@adminLoginPost']);
    Route::get('/admin/login', 'AdminAuth\AuthController@adminLogin');
    Route::post('/admin/login', ['as'=>'admin-login','uses'=>'AdminAuth\AuthController@adminLoginPost']);
});



