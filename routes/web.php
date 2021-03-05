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
Route::get('/user/profile', 'UserController@profileShow')->name('profile-show');
Route::get('/user/profile/create', 'UserController@profileCreate');
Route::post('/user/store/profile', 'UserController@profileStore')->name('profile-store');
Route::get('/user/profile/edit', 'UserController@profileEdit');
Route::put('/user/update/profile', 'UserController@profileUpdate')->name('profile-update');

Route::get('/image/gallary', 'ImageController@index');
Route::get('/image/upload', 'ImageController@create');
Route::post('/image/store', 'ImageController@store')->name('upload-image');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
