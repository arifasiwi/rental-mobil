<?php


Route::get('/backoffice', ['as' => 'backoffice', 'uses' => 'PageController@backoffice']);
Route::get('/', ['as' => 'page', 'uses' => 'PageController@landingpage']);
Route::get('/cars', ['as' => 'page', 'uses' => 'PageController@cars']);
Route::get('/login', ['as' => 'login', 'uses' => 'PageController@getLogin']);
Route::get('/landingpage', ['as' => 'landingpage', 'uses' => 'PageController@landingpage']);
Route::get('give-me-token', ['as' => 'token', 'uses' => 'PageController@token']);
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


