<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AttendenceReportController;

// --------------------
// Login Route
// --------------------
Route::post('/login', function (Request $request) {
    $user = \App\Models\User::where('username', $request->username)->first();

    if (!$user || !Hash::check($request->password, $user->password)) {
        return response()->json(['message' => 'Unauthorized'], 401);
    }

    $token = $user->createToken('auth_token')->plainTextToken;

    return response()->json([
        'access_token' => $token,
        'user' => $user
    ]);
});
Route::get('/attendance-reports', [AttendenceReportController::class, 'index']);
// --------------------
// Routes that require authentication
// --------------------
Route::middleware('auth:sanctum')->group(function () {

    // Get currently logged-in user
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    // Attendance routes (index, store)
    Route::get('/attendance', [AttendanceController::class, 'index']);
    Route::post('/attendance', [AttendanceController::class, 'store']);

    // Optional: user management (if needed)
    Route::apiResource('user', UserController::class)
         ->only(['index', 'show', 'update', 'destroy']);
});

use App\Http\Controllers\LeaveController;

// Change this in your api.php
// routes/api.php
// routes/api.php

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/leaves', [LeaveController::class, 'index']);
    Route::post('/leaves', [LeaveController::class, 'store']);
    
    // CHANGE {id} TO {leave} TO MATCH THE CONTROLLER
    Route::put('/leaves/{leave}', [LeaveController::class, 'update']);
    Route::delete('/leaves/{leave}', [LeaveController::class, 'destroy']);
});