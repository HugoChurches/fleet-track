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

Route::get('/about', 'InformationController@about')->name('about.about');
Route::get('/contact', 'InformationController@contact')->name('contact.contact');

//Routes for trips
Route::get('/trips', 'TripController@index')->name('trips.index');
Route::get('/trips/create', 'TripController@create')->name('trips.create');
Route::post('/trips/create', 'TripController@store')->name('trips.store');
Route::get('/trips/{trip}', 'TripController@show')->name('trips.show');
Route::get('/trips/{trip}/edit', 'TripController@edit')->name('trips.edit');
Route::patch('/trips/{trip}', 'TripController@update')->name('trips.update');
Route::post('/trips/{trip}/start', 'TripController@start')->name('trips.start');
Route::post('/trips/{trip}/end', 'TripController@end')->name('trips.end');
Route::delete('/trips/{trip}', 'TripController@destroy')->name('trips.destroy');
Route::post('/trips/{trip}/authorize', 'TripController@authorizeTrip')->name('trips.authorize');


//Routes for maintenance
Route::get('/maintenances', 'MaintenanceController@index')->name('maintenances.index');
Route::get('/maintenances/create', 'MaintenanceController@create')->name('maintenances.create');
Route::post('/maintenances/create', 'MaintenanceController@store')->name('maintenances.store');
Route::get('/maintenances/{maintenance}', 'MaintenanceController@show')->name('maintenances.show');
Route::post('/maintenances/{maintenance}/start', 'MaintenanceController@start')->name('maintenances.start');
Route::post('/maintenances/{maintenance}/end', 'MaintenanceController@end')->name('maintenances.end');
Route::get('/maintenances/delete/{maintenance}', 'MaintenanceController@delete')->name('maintenances.delete');
Route::delete('/maintenances/delete/{maintenance}', 'MaintenanceController@destroy')->name('maintenances.destroy');

//Routes for drivers
Route::get('/drivers', 'DriverController@index')->name('drivers.index');
Route::get('/drivers/{driver}', 'DriverController@show')->name('drivers.show');

//Routes for administrators
Route::get('/administrators', 'AdministratorController@index')->name('administrators.index');
Route::get('/administrators/create', 'AdministratorController@create')->name('administrators.create');
Route::post('/administrators/create', 'AdministratorController@store')->name('administrators.store');
Route::get('/administrators/{administrator}', 'AdministratorController@show')->name('administrators.show');
Route::get('/administrators/{administrator}/edit}', 'AdministratorController@edit')->name('administrators.edit');
Route::patch('/administrators/{administrator}', 'AdministratorController@update')->name('administrators.update');

//Routes for vehicles
Route::get('/vehicles', 'VehicleController@index')->name('vehicles.index');
Route::get('/vehicles/create', 'VehicleController@create')->name('vehicles.create');
Route::post('/vehicles/create', 'VehicleController@store')->name('vehicles.store');
Route::get('/vehicles/{vehicle}', 'VehicleController@show')->name('vehicles.show');
Route::get('/vehicles/delete/{vehicle}', 'VehicleController@delete')->name('vehicles.delete');
Route::delete('/vehicles/delete/{vehicle}', 'VehicleController@destroy')->name('vehicles.destroy');
Route::get('/vehicles/{vehicle}/edit', 'VehicleController@edit')->name('vehicles.edit');
Route::patch('/vehicles/{vehicle}', 'VehicleController@update')->name('vehicles.update');
