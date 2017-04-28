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

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::resource('cars','CarsController');
Route::resource('transactions','TransactionsController');
Route::resource('employees','EmployeesController');
Route::resource('drivers','DriversController');
Route::resource('users','UsersController');
Route::resource('customers','CustomersController');