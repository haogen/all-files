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

Route::get('/',[
    App\Http\Controllers\ReportingController::class,
    'index'
]);

Route::get('/orders',[
    App\Http\Controllers\ReportingController::class,
    'orders'
]);

Route::get('/summary',[
    App\Http\Controllers\ReportingController::class,
    'summary'
]);

Route::get('/category/toys',[
    App\Http\Controllers\ReportingController::class,
    'category_toys'
]);

Route::get('/category/books',[
    App\Http\Controllers\ReportingController::class,
    'category_books'
]);

Route::get('/category/homesup',[
    App\Http\Controllers\ReportingController::class,
    'category_homesup'
]);

Route::get('/category/accessories',[
    App\Http\Controllers\ReportingController::class,
    'category_accessories'
]);

Route::get('/category/gadgets',[
    App\Http\Controllers\ReportingController::class,
    'category_gadgets'
]);

Route::get('/category/food',[
    App\Http\Controllers\ReportingController::class,
    'category_food'
]);

Route::get('/category/appliances',[
    App\Http\Controllers\ReportingController::class,
    'category_appliances'
]);