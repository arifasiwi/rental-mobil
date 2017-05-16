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


Route::resource('cars','CarsController');
Route::resource('transactions','TransactionsController');
Route::get('cek-pengunjung/{id}','TransactionsController@cekjumlahpengunjung');
Route::get('jumlah-order','TransactionsController@jumlahtransactions');

Route::resource('employees','EmployeesController');
Route::resource('drivers','DriversController');
Route::resource('users','UsersController');
// Authentication routes...
Route::get('get-session', 'UsersController@getSession');
Route::put('updatePass-users', 'UserController@updatePass');

Route::resource('customers','CustomersController');
Route::get('jumlah-customers','CustomersController@jumlahcustomers');


Route::group(['namespace' => 'Auth'], function () {
    // Authentication routes...
    Route::get('get-login', 'LoginController@getLogin');
    Route::get('logout', 'LoginController@getLogout');
    Route::get('post-login', 'LoginController@getLogin');
    Route::post('post-login', 'LoginController@postLogin');
});
