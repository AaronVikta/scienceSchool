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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/administration','PageController@AdministrationPage');
Route::get('/admission','PageController@Admission');
Route::get('/examinations','PageController@External');
Route::get('/extra','PageController@Extra');
Route::get('/faq','PageController@FAQ');
Route::get('/administration','PageController@AdministrationPage');
Route::get('/results','PageController@Results');
Route::get('/skills','PageController@Skills');
Route::get('/terms','PageController@Terms');
Route::post('/import','PinsController@importExcel');
