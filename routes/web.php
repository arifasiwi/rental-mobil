<?php


Route::get('/backoffice', ['as' => 'backoffice', 'uses' => 'PageController@backoffice']);
Route::get('/login', function () {
    return view('login');
});

Route::get('/', ['as' => 'page', 'uses' => 'PageController@getLogin']);
Route::get('/login', ['as' => 'login', 'uses' => 'PageController@getLogin']);

Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

Route::get('session/get', 'SessionController@getSession');
Route::get('session/put', 'SessionController@putSession');
Route::get('session/forget', 'SessionController@Session');
//Auth::routes();

Route::get('/home', 'HomeController@index');
