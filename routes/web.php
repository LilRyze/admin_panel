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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/email_available/check', 'EmailAvailableController@check')->name('emailcheck');

Route::get('/create_destination', 'AdminController@showCreateDestination')->middleware('role:admin');
Route::get('/read_destinations', 'AdminController@showReadDestinations')->middleware('role:admin');
Route::get('/update_destination/{id}', 'AdminController@showUpdateDestination')->middleware('role:admin');

Route::get('/guzzle_test', 'GuzzleController@testing');

Route::get('/delete_destination/{id}', 'AdminController@deleteDestination')->middleware('role:admin');
Route::post('/create_destination', 'AdminController@createDestination')->middleware('role:admin');
Route::post('/update_destination/{id}', 'AdminController@updateDestination')->middleware('role:admin');
