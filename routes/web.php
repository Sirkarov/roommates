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

Route::get('/', 'Front\IndexController@home');
//Route::get('/login', 'Auth\LoginController@login');
Route::get('/add-listing', 'Front\AddListingController@addListing');
Route::get('/register', 'Front\RegisterController@register');
Route::get('/listing', 'Front\ListingController@listings');

Auth::routes();

