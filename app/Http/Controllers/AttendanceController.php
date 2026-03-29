<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AttendanceController extends Controller
{
    public function __construct()
    {
        // Use Sanctum auth for all attendance routes
        $this->middleware('auth:sanctum');
    }

    public function index()
    {
        // Only return attendances for the logged-in user
        return Attendance::where('user_id', auth()->id())
                         ->latest()
                         ->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|in:in,out'
        ]);

        $userId = auth()->id();

        if ($request->type === 'in') {
            $attendance = Attendance::create([
                'user_id' => $userId,
                'check_in' => Carbon::now(),
                'check_out' => null,
                'work_hour' => 0,
                'reason' => null
            ]);

            return response()->json([
                'message' => 'Checked in successfully',
                'data' => $attendance
            ]);
        }

        if ($request->type === 'out') {
            $attendance = Attendance::where('user_id', $userId)
                                    ->whereNull('check_out')
                                    ->latest()
                                    ->first();

            if (!$attendance) {
                return response()->json(['message' => 'No active session found'], 404);
            }

            $checkOut = Carbon::now();
            $hours = $attendance->check_in->diffInHours($checkOut);

            $attendance->update([
                'check_out' => $checkOut,
                'work_hour' => $hours
            ]);

            return response()->json([
                'message' => 'Checked out successfully',
                'data' => $attendance
            ]);
        }
    }
}