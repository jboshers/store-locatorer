<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'LocationsController@index');
Route::resource('locations', 'LocationsController');

Route::get('/maptest',  'LocationsController@ajaxTest');

// API MUTHAFUCKA!
Route::get('/api/getLocations',  'APIController@index');