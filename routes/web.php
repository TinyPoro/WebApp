<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('/upload','dtbController@upload');

Route::get('/create','dtbController@create');

Route::get('/activation','dtbController@activation');

Route::post('/upload','dtbController@excelSend');

Route::post('/create','dtbController@store');

Route::get('/update','dtbController@update');

Route::post('/update','dtbController@edit');

Route::get('/signin', 'dtbController@signin');

Route::post('/signin', 'dtbController@checkSignin');

Route::get('/logout', 'dtbController@logout');

Route::post('/nhap_linh_vuc', 'dtbController@cap_nhat_linh_vuc');

Route::get('/nhap_linh_vuc', 'dtbController@nhap_linh_vuc');

Route::post('/search', 'dtbController@show');

Route::get('/search', 'dtbController@search');

Route::post('/nhap_khoa_hoc', 'dtbController@cap_nhat_khoa_hoc');

Route::get('/nhap_khoa_hoc', 'dtbController@nhap_khoa_hoc');

Route::post('/nhap_ctdt', 'dtbController@cap_nhat_ctdt');

Route::get('/nhap_ctdt', 'dtbController@nhap_ctdt');



Route::get('/test', 'dtbController@getTest');

Route::post('test', ['as'=>'test', 'uses' => 'dtbController@postTest']);




