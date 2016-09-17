<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'DashboardController@index');

Route::get('/dashboard', 'DashboardController@index');
Route::get('/oncall', 'OncallController@index');
Route::post('/update/oncall', 'OncallController@update');

Route::get('/employee', 'EmployeeController@index');

Route::get('/department', 'DepartmentController@index');
Route::get('/get/department', 'DepartmentController@getDepartment');
Route::post('/add/department', 'DepartmentController@store');
Route::post('/edit/department', 'DepartmentController@update');
Route::post('/delete/department', 'DepartmentController@delete');