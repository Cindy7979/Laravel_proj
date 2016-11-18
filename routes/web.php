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

use Illuminate\Http\Response;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function() {
// 	return view('layouts.Home');
// });

// Route::get('/our_service', function() {
// 	return view('layouts.OurService');
// });

// Route::get('/project', function() {
// 	return view('layouts.Project');
// });

// Route::get('/contact_us', function() {
// 	return view('layouts.ContactUs');
// });

Route::get('{view_name?}', 'MasterController@classifyByView');