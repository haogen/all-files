<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products',[
    App\Http\Controllers\HomeController::class,
    'products'
]);

Route::get('/categories',[
    App\Http\Controllers\HomeController::class,
    'categories'
]);

Route::get('/orders',[
    App\Http\Controllers\HomeController::class,
    'orders'
]);

Route::get('/customers',[
    App\Http\Controllers\HomeController::class,
    'customers'
]);

Route::get('/products/create',[
    App\Http\Controllers\HomeController::class,
    'products_create'
]);

Route::get('/categories/create',[
    App\Http\Controllers\HomeController::class,
    'categories_create'
]);

Route::get('/orders/create',[
    App\Http\Controllers\HomeController::class,
    'orders_create'
]);

Route::get('/customers/create',[
    App\Http\Controllers\HomeController::class,
    'customers_create'
]);