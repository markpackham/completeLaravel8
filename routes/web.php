<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

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

// Traditional routing way in laravel 8
// Route::get('/products', [ProductsController::class, 'index']);

// Alternate method new to laravel 8
Route::get('/products', 'App\Http\Controllers\ProductsController@index');
