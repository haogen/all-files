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

Route::get('/test/1',[
    App\Http\Controllers\PersonnelController::class,
    'show_all'
]);

Route::get('/test/2',[
    App\Http\Controllers\PersonnelController::class,
    'avg_personnel'
]);

Route::get('/test/3',[
    App\Http\Controllers\PersonnelController::class,
    'find_personnel'
]);

Route::get('/test/4',[
    App\Http\Controllers\PersonnelController::class,
    'count_personnel'
]);

Route::get('/test/5',[
    App\Http\Controllers\StatisticsController::class,
    'sum_statistics'
]);

Route::get('/test/6',[
    App\Http\Controllers\PersonnelController::class,
    'select_personnel'
]);

Route::get('/test/7',[
    App\Http\Controllers\PersonnelController::class,
    'show_age'
]);

Route::get('/test/8',[
    App\Http\Controllers\PersonnelController::class,
    'avg_age'
]);

Route::get('/test/9',[
    App\Http\Controllers\StatisticsController::class,
    'count_height'
]);

Route::get('/test/10',[
    App\Http\Controllers\StatisticsController::class,
    'sum_weight'
]);

Route::get('/test/11',[
    App\Http\Controllers\PersonnelController::class,
    'show_id'
]);
