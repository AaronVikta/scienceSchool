<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/pins/{id}', 'PinsController@index');
Route::post('/form','FormController@store');
Route::post('/newform','FormController@update');
Route::get('/forms','FormController@index');
Route::get('/myform/{id}','FormController@myForm');
