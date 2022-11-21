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
    'middleware' => ['api','cors'],
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::get('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
});

Route::group([
    'namespace'=>'App\Http\Controllers\User',
    'middleware'=>'jwt.auth',
], function(){
    Route::get('/doctors', 'IndexController');
    //Route::get('/users/create', 'CreateController');
    Route::post('/newdoctor', 'StoreController');
    Route::get('/doctors/{id}', 'ShowController');
    //Route::get('/users/{user}/edit', 'EditController');
    Route::patch('/doctors/editdoctor/${id}', 'UpdateController');
    Route::delete('/doctors/{id}', 'DeleteController');
});

Route::group([
    'namespace'=>'App\Http\Controllers\PatientInfo',
    'middleware'=>'jwt.auth',
], function(){
    Route::get('/patients', 'IndexController');
    //Route::get('/patients/create', 'CreateController');
    Route::post('/newpatient', 'StoreController');
    Route::get('/patients/{id}', 'ShowController');
    //Route::get('/patients/{patient}/edit', 'EditController');
    Route::patch('/patients/{id}', 'UpdateController');
    Route::delete('/patients/{id}', 'DeleteController');
});




