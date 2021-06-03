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

Route::get('/login',[
    App\Http\Controllers\LoginController::class,
    'index'
]);

Route::get('/table',[
    App\Http\Controllers\LoginController::class,
    'table'
]);

Route::get('/layout',[
    App\Http\Controllers\LoginController::class,
    'layout'
]);

Route::get('/employees',[
    App\Http\Controllers\EmployeesController::class,
    'employees'
]);

Route::get('/loans',[
    App\Http\Controllers\LoansController::class,
    'loans'
]);

Route::get('/leaves',[
    App\Http\Controllers\LeavesController::class,
    'leaves'
]);

Route::get('/mandatory-deductions',[
    App\Http\Controllers\DeductionsController::class,
    'mandatory_deductions'
]);

Route::get('/timekeeping',[
    App\Http\Controllers\TimekeepingController::class,
    'timekeeping'
]);

Route::get('/payslips',[
    App\Http\Controllers\PayslipsController::class,
    'payslips'
]);

Route::get('/settings',[
    App\Http\Controllers\SettingsController::class,
    'settings'
]);

Route::get('/form',[
    App\Http\Controllers\FormController::class,
    'form'
]);

Route::get('/department',[
    App\Http\Controllers\DepartmentController::class,
    'department'
]);

Route::get('/department/create',[
    App\Http\Controllers\DepartmentController::class,
    'department_create'
]);

Route::get('/employees/create',[
    App\Http\Controllers\EmployeesController::class,
    'employees_create'
]);

Route::get('/leaves/create',[
    App\Http\Controllers\LeavesController::class,
    'leaves_create'
]);

Route::get('/loans/create',[
    App\Http\Controllers\LoansController::class,
    'loans_create'
]);

Route::get('/mandatory-deductions/create',[
    App\Http\Controllers\DeductionsController::class,
    'mandatory_deductions_create'
]);

Route::get('/timekeeping/create',[
    App\Http\Controllers\TimekeepingController::class,
    'timekeeping_create'
]);

Route::get('/payslips/create',[
    App\Http\Controllers\PayslipsController::class,
    'payslips_create'
]);

Route::get('/settings/create',[
    App\Http\Controllers\SettingsController::class,
    'settings_create'
]);