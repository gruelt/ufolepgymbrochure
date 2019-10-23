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

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');





//  _______ _______  ______ _______ ______
// (_______)_______)/ _____)_______) _____)
//     _    _____  ( (____     _  ( (____
//    | |  |  ___)  \____ \   | |  \____ \
//    | |  | |_____ _____) )  | |  _____) )
//    |_|  |_______)______/   |_| (______/
//
Route::get('/', function () {
    return 'OK verifié';
})->middleware('verified');
