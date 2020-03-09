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


// SITE routes
Route::get('/', 'PagesController@welcome');
Route::get('/inventory', 'PagesController@inventory');
Route::post('/filter-inventory', 'PagesController@filterInventory');
Route::get('/financing', 'PagesController@financing');
Route::get('/faqs', 'PagesController@faqs');
Route::get('/contact', 'PagesController@contact');
Route::post('/send-contact', 'PagesController@sendContact');
Route::post('/send-financing', 'PagesController@sendFinancing');
Route::get('/vehicle/{id}', 'PagesController@vehicleInfo');

// DASHBOARD routes
Auth::routes(['register' => false]);
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/import-xls', 'HomeController@importXls');
Route::post('/update-vehicle', 'HomeController@updateVehicle');
Route::get('/add-vehicle', 'HomeController@addVehicle');
Route::get('/edit-vehicle/{id}', 'HomeController@editVehicle');
Route::post('/remove-images', 'HomeController@removeImages');
Route::post('/remove-vehicles', 'HomeController@removeVehicles');
