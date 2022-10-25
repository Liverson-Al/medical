<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', 'App\Http\Controllers\HomeController@index');

Route::get('/main', 'App\Http\Controllers\DoctorHomeController@index')->name('doctors_home.index');
Route::get('/doctors', 'App\Http\Controllers\DoctorController@index')->name('doctors.index');


Route::get('/read', 'App\Http\Controllers\PatientController@index')->name('patients.index');

Route::get('/patients', 'App\Http\Controllers\PatientController@index')->name('patients.index');
Route::get('/patients/create', 'App\Http\Controllers\PatientController@create')->name('patients.create');
Route::post('/patients', 'App\Http\Controllers\PatientController@store')->name('patients.store');


Route::get('/patients', 'App\Http\Controllers\PatientController@index')->name('patients.index');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes();
//
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
