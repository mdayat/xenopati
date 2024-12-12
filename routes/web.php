<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EmpPresenceController;
use App\Http\Controllers\EmpSalaryController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('employees', EmployeeController::class);
Route::resource('emp_presences', EmpPresenceController::class);
Route::resource('emp_salaries', EmpSalaryController::class);
