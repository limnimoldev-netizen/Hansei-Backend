<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::apiResource('attendance', AttendanceController::class);
Route::apiResource('user', UserController::class);

// routes/api.php
Route::post('/login', function (Request $request) {
    $user = \App\Models\User::where('username', $request->username)->first();

    // Check if user exists and password matches
    if (!$user || !Hash::check($request->password, $user->password)) {
        return response()->json(['message' => 'Unauthorized'], 401);
    }

    // This creates the token for Sanctum
    $token = $user->createToken('auth_token')->plainTextToken;

    return response()->json([
        'access_token' => $token,
        'user' => $user // This includes your full_name for the sidebar
    ]);
});