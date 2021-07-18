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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/clustering2016', 'App\Http\Controllers\PythonController@result1')->name('clustering2016');
Route::get('/clustering2017', 'App\Http\Controllers\PythonController@result2')->name('clustering2017');
Route::get('/clustering2018', 'App\Http\Controllers\PythonController@result3')->name('clustering2018');
Route::get('/clustering2019', 'App\Http\Controllers\PythonController@result4')->name('clustering2019');
