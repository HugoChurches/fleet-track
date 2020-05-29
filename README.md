This is the final project for our web development class. It's based on Laravel's framework and scripted using PHP and I'm using several dependencies such as Composer, Tailwind CSS and Sweet Alert for Laravel. 

Here are the Endpoints/Routes for Laravel
//Routes for home/start blades
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');

//Routes for about & contact blades
Route::get('/about', 'InformationController@about')->name('about.about');
Route::get('/contact', 'InformationController@contact')->name('contact.contact');

//Routes for trips blades
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
Route::get('/trips/{trip}/edit_note', 'TripController@showNotes')->name('trips.showNotes');
Route::patch('/trips/{trip}/note', 'TripController@addNotes')->name('trips.addNotes');


//Routes for maintenance blades
Route::get('/maintenances', 'MaintenanceController@index')->name('maintenances.index');
Route::get('/maintenances/create', 'MaintenanceController@create')->name('maintenances.create');
Route::post('/maintenances/create', 'MaintenanceController@store')->name('maintenances.store');
Route::get('/maintenances/{maintenance}', 'MaintenanceController@show')->name('maintenances.show');
Route::post('/maintenances/{maintenance}/start', 'MaintenanceController@start')->name('maintenances.start');
Route::post('/maintenances/{maintenance}/end', 'MaintenanceController@end')->name('maintenances.end');
Route::get('/maintenances/delete/{maintenance}', 'MaintenanceController@delete')->name('maintenances.delete');
Route::delete('/maintenances/delete/{maintenance}', 'MaintenanceController@destroy')->name('maintenances.destroy');

//Routes for drivers blades
Route::get('/drivers', 'DriverController@index')->name('drivers.index');
Route::get('/drivers/{driver}', 'DriverController@show')->name('drivers.show');
Route::get('/drivers/delete/{driver}', 'DriverController@delete')->name('drivers.delete');
Route::delete('/drivers/delete/{driver}', 'DriverController@destroy')->name('drivers.destroy');

//Routes for administrators blades
Route::get('/administrators', 'AdministratorController@index')->name('administrators.index');
Route::get('/administrators/create', 'AdministratorController@create')->name('administrators.create');
Route::post('/administrators/create', 'AdministratorController@store')->name('administrators.store');
Route::get('/administrators/{administrator}', 'AdministratorController@show')->name('administrators.show');
Route::get('/administrators/{administrator}/edit}', 'AdministratorController@edit')->name('administrators.edit');
Route::patch('/administrators/{administrator}', 'AdministratorController@update')->name('administrators.update');

//Routes for vehicles blades
Route::get('/vehicles', 'VehicleController@index')->name('vehicles.index');
Route::get('/vehicles/create', 'VehicleController@create')->name('vehicles.create');
Route::post('/vehicles/create', 'VehicleController@store')->name('vehicles.store');
Route::get('/vehicles/{vehicle}', 'VehicleController@show')->name('vehicles.show');
Route::get('/vehicles/delete/{vehicle}', 'VehicleController@delete')->name('vehicles.delete');
Route::delete('/vehicles/delete/{vehicle}', 'VehicleController@destroy')->name('vehicles.destroy');
Route::get('/vehicles/{vehicle}/edit', 'VehicleController@edit')->name('vehicles.edit');
Route::patch('/vehicles/{vehicle}', 'VehicleController@update')->name('vehicles.update');


<p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- [UserInsights](https://userinsights.com)
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)
- [CodeBrisk](https://codebrisk.com)
- [1Forge](https://1forge.com)
- [TECPRESSO](https://tecpresso.co.jp/)
- [Runtime Converter](http://runtimeconverter.com/)
- [WebL'Agence](https://weblagence.com/)
- [Invoice Ninja](https://www.invoiceninja.com)
- [iMi digital](https://www.imi-digital.de/)
- [Earthlink](https://www.earthlink.ro/)
- [Steadfast Collective](https://steadfastcollective.com/)
- [We Are The Robots Inc.](https://watr.mx/)
- [Understand.io](https://www.understand.io/)
- [Abdel Elrafa](https://abdelelrafa.com)
- [Hyper Host](https://hyper.host)
- [Appoly](https://www.appoly.co.uk)
- [OP.GG](https://op.gg)
- [云软科技](http://www.yunruan.ltd/)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
