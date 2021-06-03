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
    App\Http\Controllers\IndexController::class,
    'index'
])->name('home');

Route::get('/create',[
    App\Http\Controllers\CreateController::class,
    'create'
])->name('create');

Route::post('/create/save',[
    App\Http\Controllers\CreateController::class,
    'save'
])->name('create.save');

Route::get('/delete/{id}',[
    App\Http\Controllers\DeleteController::class,
    'index_delete'
])->name('delete');

Route::get('/update/{id}',[
    App\Http\Controllers\UpdateController::class,
    'index_update'
])->name('update');

Route::post('/update/{id}/save',[
    App\Http\Controllers\UpdateController::class,
    'save'
])->name('update.save');
