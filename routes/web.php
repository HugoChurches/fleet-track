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

Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');

//Routes for trips
Route::get('/trips', 'TripController@index')->name('trips.index');
Route::get('/trips/create', 'TripController@create')->name('trips.create');
Route::post('/trips/create', 'TripController@store')->name('trips.store');
Route::get('/trips/{trip}', 'TripController@show')->name('trips.show');

//Routes to update fields for trips
Route::get('/trips/{trip}/edit', 'TripController@edit')->name('trips.edit');
Route::patch('/trips/{trip}', 'TripController@update')->name('trips.update');

//Routes for drivers
Route::get('/drivers', 'DriverController@index')->name('drivers.index');


//Routes for administrators
Route::get('/administrators', 'AdministratorController@index')->name('administrators.index');
Route::get('/administrators/create', 'AdministratorController@create')->name('administrators.create');
Route::post('/administrators/create', 'AdministratorController@store')->name('administrators.store');
Route::get('/administrators/{administrator}', 'AdministratorController@show')->name('administrators.show');

//Routes to update fields for administrators
Route::get('/administrators/{administrator}/edit}', 'AdministratorController@edit')->name('administrators.edit');
Route::patch('/administrators/{administrator}', 'AdministratorController@update')->name('administrators.update');


//Routes for vehicles
Route::get('/vehicles', 'VehicleController@index')->name('vehicles.index');
Route::get('/vehicles/create', 'VehicleController@create')->name('vehicles.create');
Route::post('/vehicles/create', 'VehicleController@store')->name('vehicles.store');
Route::get('/vehicles/{vehicle}', 'VehicleController@show')->name('vehicles.show');

//Testing delete method
Route::get('/vehicles/delete/{vehicle}', 'VehicleController@delshow')->name('vehicles.delshow');
Route::delete('/vehicles/delete/{vehicle}', 'VehicleController@destroy')->name('vehicles.destroy');



//Routes to update fields for vehicles
Route::get('/vehicles/{vehicle}/edit', 'VehicleController@edit')->name('vehicles.edit');
Route::patch('/vehicles/{vehicle}', 'VehicleController@update')->name('vehicles.update');
