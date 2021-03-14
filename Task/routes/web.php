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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/employee','Crud\EmployeeController@index');
Route::post('/empsave','Crud\EmployeeController@store');
Route::get('/employee_show','Crud\EmployeeController@show');
Route::get('user/edit/{id}','Crud\EmployeeController@edit');
Route::post('user/update','Crud\EmployeeController@update');
Route::get('/user/delete/{id}','Crud\EmployeeController@delete');



Route::get('/company','Crud\CompanyController@index');
Route::post('/save','Crud\CompanyController@store');
Route::get('/company_show','Crud\CompanyController@show');
Route::get('/company/edit/{id}','Crud\CompanyController@edit');
Route::post('/company/update','Crud\CompanyController@update');
Route::get('/company/delete/{id}','Crud\CompanyController@delete');