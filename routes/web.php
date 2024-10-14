<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'WebController@homeview');
Route::get('register', 'WebController@registerview');
Route::post('user-registration', 'UserRegistrationController@userregistration');
Route::post('user-authentication', 'AuthController@userauthentication');
Route::get('admin-dashboard', 'AdminController@admindashboard');

Route::get('users', 'AdminController@users');
Route::get('categories', 'AdminController@categories');
Route::get('app-data', 'AdminController@appdata');

Route::post('update-app-data-general', 'AdminController@updateappdatageneral');

Route::post('update-app-data-contact', 'AdminController@updateappdatacontact');







Route::get('user-dashboard', 'UserController@userdashboard');

