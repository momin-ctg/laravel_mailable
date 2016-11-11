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

use App\Mail\ositMail;

Route::get('/', function () {
	// send an email to "batman@batcave.io"
	Mail::to('mominriyadh@gmail.com')->queue(new ositMail);

	return view('welcome');
});
//
//Route::get('/', function () {
//    return view('welcome');
//});
