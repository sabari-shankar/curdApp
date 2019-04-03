<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile','UserController@profile');
Route::post('/profile','UserController@update_profile');

Route::get('/employee','EmployeeController@index');
Route::post('/emp','EmployeeController@store');
Route::get('emp/{id}','EmployeeController@show');
Route::post('/emp-update','EmployeeController@update');
Route::get('emp-delete/{id}','EmployeeController@destroy');

Route::get('form',function(){
	return view('forms');
});
