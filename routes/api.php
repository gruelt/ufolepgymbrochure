<?php

use Illuminate\Http\Request;

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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Resources


Route::resource('agres',AgresAPIController::class);
Route::resource('agres.elements',AgresElementAPIController::class);
Route::resource('agres.familles',AgresFamilleAPIController::class);
Route::resource('genres',GenreAPIController::class);
Route::resource('familles',FamilleAPIController::class);
Route::resource('elements',ElementAPIController::class);

//Auth Sanctum test
//Route::get('/auth','Auth\TokenController@test');
