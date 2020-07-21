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

Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signUp');

    Route::group([
        'middleware' => 'auth:api'
    ], function () {
        Route::get('logout', 'AuthController@logout');
        Route::get('profile', 'AuthController@user');
        Route::post('/customer', 'CustomerController@index');
        Route::post('/user', 'UserController@index')->middleware('role');
        Route::get('/customer', 'CustomerController@show')->middleware('role');;
        Route::get('/user', 'UserController@show');
        Route::get('/customer/{id}', 'CustomerController@showbyId');
        Route::get('/user/{id}', 'UserController@showbyId');
        Route::put('/customerupdate/{id}', "CustomerController@update");
        Route::put('/userupdate/{id}', 'UserController@update')->middleware('role');
        Route::delete('customerdelete/{id}', 'CustomerController@destroy');
        Route::delete('userdelete/{id}', 'UserController@destroy')->middleware('role');
        Route::get('roles', 'RoleController@index')->middleware('role');
        Route::get('role/{role}', 'RoleController@show')->middleware('role');
    });
});
