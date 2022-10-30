<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Employee;


Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::get('/admin', 'App\Http\Controllers\MainController@index');

Route::get('/main', 'App\Http\Controllers\EmployeeHomeController@index')->name('employees_home.index');

Route::group(['namespace'=>'App\Http\Controllers\Employee'], function(){
    Route::get('/employees', 'IndexController')->name('employees.index');
    Route::get('/employees/create', 'CreateController')->name('employees.create');
    Route::post('/employees', 'StoreController');
    Route::get('/employees/{employee}', 'ShowController')->name('employees.show');
    Route::get('/employees/{employee}/edit', 'EditController')->name('employees.edit');
    Route::patch('/employees/{employee}', 'UpdateController')->name('employees.update');
    Route::delete('/employees/{employee}', 'DeleteController')->name('employees.delete');
});




Route::get('/patients', 'App\Http\Controllers\PatientController@index')->name('patients.index');
Route::get('/patients/create', 'App\Http\Controllers\PatientController@create')->name('patients.create');
Route::post('/patients', 'App\Http\Controllers\PatientController@store')->name('patients.store');
Route::get('/patients/{patient}', 'App\Http\Controllers\PatientController@show')->name('patients.show');
Route::get('/patients/{patient}/edit', 'App\Http\Controllers\PatientController@edit')->name('patients.edit');
Route::patch('/patients/{patient}', 'App\Http\Controllers\PatientController@update')->name('patients.update');
Route::delete('/patients/{patient}', 'App\Http\Controllers\PatientController@destroy')->name('patients.delete');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Auth::routes();
//
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
