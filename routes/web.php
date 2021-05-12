<?php

use App\Models\Employee;
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

Route::get('/index', [\App\Http\Controllers\EmployeeController::class, 'index']);

Route::get('/hire/{id}/edit', [\App\Http\Controllers\EmployeeController::class, 'hired'])->name('employee.hire');

Route::get('/employees/{id}/edit',[\App\Http\Controllers\EmployeeController::class, "edit"])->name('employee.edit');

Route::put('/employees/{id}/update',[\App\Http\Controllers\EmployeeController::class, "update"])->name('employee.update');

Route::get('/employee/{id}/delete',[\App\Http\Controllers\EmployeeController::class, 'destroy'])->name('delete');
