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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'UserController@index');

Route::get('/user/portfolio-details', 'UserController@portfolioDetails');
Route::get('/user/edit/profile/{id}', 'UserController@edit');
Route::post('/user/edit/profile/{id}', 'UserController@update')->name('user-update');
Route::get('/user/profile/{id}', 'UserController@show');

Route::get('/image/gallary', 'ImageController@index');
Route::get('/image/upload', 'ImageController@create');
Route::post('/image/store', 'ImageController@store')->name('upload-image');
