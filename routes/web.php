<?php

use Illuminate\Support\Facades\Route;

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


 
Route::get('/', 'App\Http\Controllers\EmployeeController@index');
Route::post('submit','App\Http\Controllers\EmployeeController@login');
Route::post('add_employee','App\Http\Controllers\EmployeeController@add_employee');
Route::get('employee','App\Http\Controllers\EmployeeController@view_employee');
Route::get('edit/{id}','App\Http\Controllers\EmployeeController@update_employee');
Route::post('edit/{id}','App\Http\Controllers\EmployeeController@update_employee_action');
Route::get('delete/{id}','App\Http\Controllers\EmployeeController@delete_employee');
Route::get('company','App\Http\Controllers\EmployeeController@view_company');
Route::get('company_employees/{cid}','App\Http\Controllers\EmployeeController@company_employees');