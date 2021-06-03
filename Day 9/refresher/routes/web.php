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

Route::get('/', [
    App\Http\Controllers\DepartmentController::class,
    'department'
])->name('home');

Route::post('/save', [
    App\Http\Controllers\DepartmentController::class,
    'save'
])->name('save');

Route::get('/delete', [
    App\Http\Controllers\DepartmentController::class,
    'delete'
])->name('delete');

