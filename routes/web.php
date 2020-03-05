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

Route::get('/inventory', 'PagesController@inventory');
Route::get('/financing', 'PagesController@financing');
Route::get('/faqs', 'PagesController@faqs');
Route::get('/contact', 'PagesController@contact');
Route::post('/send-contact', 'PagesController@sendContact');
Route::post('/send-financing', 'PagesController@sendFinancing');
