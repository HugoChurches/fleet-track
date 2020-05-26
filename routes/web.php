<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| VERY IMPORTANT STUFFS!!!
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

Route::get('/trips', 'TripController@index')->name('trips.index');
Route::get('/trips/create', 'TripController@create')->name('trips.create');
Route::post('/trips/create', 'TripController@store')->name('trips.store');
Route::get('/trips/{trip}', 'TripController@show')->name('trips.show');

Route::get('/drivers', 'DriverController@index')->name('drivers.index');

Route::get('/administrators', 'AdministratorController@index')->name('administrators.index');
Route::get('/administrators/create', 'AdministratorController@create')->name('administrators.create');
Route::post('/administrators/create', 'AdministratorController@store')->name('administrators.store');
Route::get('/administrators/{administrator}', 'AdministratorController@show')->name('administrators.show');

Route::get('/vehicles', 'VehicleController@index')->name('vehicles.index');
Route::get('/vehicles/create', 'VehicleController@create')->name('vehicles.create');
Route::post('/vehicles/create', 'VehicleController@store')->name('vehicles.store');
Route::get('/vehicles/{vehicle}', 'VehicleController@show')->name('vehicles.show');
