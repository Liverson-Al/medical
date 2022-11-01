<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([
    'namespace' => 'App\Http\Controllers',
    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});

Route::group([
    'namespace'=>'App\Http\Controllers\Employee',
    'middleware'=>'jwt.auth',
], function(){
    Route::get('/employees', 'IndexController');
    Route::get('/employees/create', 'CreateController');
    Route::post('/employees', 'StoreController');
    Route::get('/employees/{employee}', 'ShowController');
    Route::get('/employees/{employee}/edit', 'EditController');
    Route::patch('/employees/{employee}', 'UpdateController');
    Route::delete('/employees/{employee}', 'DeleteController');
});

Route::group([
    'namespace'=>'App\Http\Controllers\PatientInfo',
    'middleware'=>'jwt.auth',
], function(){
    Route::get('/patients', 'IndexController');
    Route::get('/patients/create', 'CreateController');
    Route::post('/patients', 'StoreController');
    Route::get('/patients/{patient}', 'ShowController');
    Route::get('/patients/{patient}/edit', 'EditController');
    Route::patch('/patients/{patient}', 'UpdateController');
    Route::delete('/patients/{patient}', 'DeleteController');
});


