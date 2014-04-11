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

//Route::controller('/', 'UserController');

Route::get('/', 'UserController@getIndex');
Route::get('login', 'UserController@getIndex');
Route::get('pharmacy', 'Pharmacy@getIndex');
Route::get('reception', 'ReceptionController@getIndex');
Route::get('admin','AdminController@getIndex');
Route::get('/addUser','UserController@addUser');
Route::post('/users/store','UserController@storeUser');
Route::post('/login', 'UserController@login');
Route::get('/manage_user','AdminController@manage_user');
Route::post('/manage_user','AdminController@addUser');
Route::get('/logout','UserController@logout');

///////////////////////////////////////////
//////////////receptionist///////////////
/*for listsing patients and adding*/
Route::get('patients' , 'PatientController@index');
/*to add a patient*/
Route::post('patients/add' , 'PatientController@store');
/*for editing a patient*/
Route::get('patients/edit/{id}' , 'PatientController@edit');
/*to update patient infor*/
Route::post('patients/edit/{id}' , 'PatientController@update');
/*to delete a patient*/
Route::get('patients/delete/{id}' , 'PatientController@destroy');
//});
