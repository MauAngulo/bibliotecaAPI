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





Route::group(['middleware'=>['cors']],function(){

	// CORS
	header('Access-Control-Allow-Origin: localhost');
	// header('Access-Control-Allow-Credentials: true');

	Auth::routes();

	Route::get('/user', function (Request $request) {
	    return $request->user();
	})->middleware('auth:api');

	Route::resource('files','FilesController');
});


