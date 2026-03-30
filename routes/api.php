<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\PositionController;
use App\Http\Controllers\SalaryReportController;
use App\Http\Controllers\AttendanceReportController;
use App\Http\Controllers\PersonalInfoController;
use App\Http\Controllers\LeaveController;


Route::get('/employees', [EmployeeController::class, 'index']);
Route::get('/attendances', [AttendanceController::class, 'index']);
Route::get('/departments', [DepartmentController::class, 'index']);
Route::get('/positions', [PositionController::class, 'index']);
Route::get('/salary-reports', [SalaryReportController::class, 'index']);
Route::get('/attendance-reports', [AttendanceReportController::class, 'index']);
Route::get('/personal-infos', [PersonalInfoController::class, 'index']);
Route::get('/leaves', [LeaveController::class, 'index']);



Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

use App\Models\Employee;

Route::get('/employees', function () {
    return Employee::all(); 
});