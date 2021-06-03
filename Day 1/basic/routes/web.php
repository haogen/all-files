<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

/** EXERCISES,  */
Route::get('/', function () {
    return view('home');
});

Route::get('/about-us', [
    App\Http\Controllers\HomeController::class,
    'about'
]);

Route::get('/contact', [
    App\Http\Controllers\HomeController::class,
    'contact'
]);

Route::get('/gallery', [
    App\Http\Controllers\HomeController::class,
    'gallery'
]);

Route::get('/profile/anthony', [
    App\Http\Controllers\HomeController::class,
    'profileanthony'
]);

Route::get('/profile/albert', [
    App\Http\Controllers\HomeController::class,
    'profilealbert'
]);

Route::get('/services/cleaning', [
    App\Http\Controllers\HomeController::class,
    'services'
]);

Route::get('/auth/user/forgot/password', [
    App\Http\Controllers\HomeController::class,
    'password'
]);

Route::get('/search/product', [
    App\Http\Controllers\HomeController::class,
    'searchproduct'
]);

Route::get('/products/filter/all/free', [
    App\Http\Controllers\HomeController::class,
    'products'
]);

Route::get('/members', [
    App\Http\Controllers\HomeController::class,
    'members'
]);

Route::get('/print', [
    App\Http\Controllers\HomeController::class,
    'printer'
]);

Route::get('/order/checkout', [
    App\Http\Controllers\HomeController::class,
    'order_checkout'
]);

Route::get('/facebook/accounts/members/login', [
    App\Http\Controllers\HomeController::class,
    'fbaccounts'
]);