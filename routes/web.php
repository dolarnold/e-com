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

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->namespace('admin')->group(function () {
//  All Admin Routes Defined here
    Route::get('dashboard', 'AdminController@dashboard');
});


Route::get('/test', 'test\TestController@getTest');

//Route::get('dashboard','admin\AdminController@dashboard');
//Route::get('shop','ShopController@dashboard');

