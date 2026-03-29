<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    public function store(Request $request)
    {
        $user = auth()->user(); // get logged-in user
        if (!$user || !$user->employee) {
            return response()->json([
                'message' => 'Employee profile not found'
            ], 400);
        }

        $employee = $user->employee;

        if ($request->type === 'in') {
            $attendance = Attendance::create([
                'employee_id' => $employee->id,
                'check_in' => now()
            ]);

            return response()->json([
                'message' => 'Checked in',
                'data' => $attendance
            ]);
        }

        if ($request->type === 'out') {
            $attendance = Attendance::where('employee_id', $employee->id)
                ->whereNull('check_out')
                ->latest()
                ->first();

            if (!$attendance) {
                return response()->json([
                    'message' => 'No active session to check out'
                ], 400);
            }

            $hours = now()->diffInMinutes($attendance->check_in) / 60;

            $attendance->update([
                'check_out' => now(),
                'work_hour' => round($hours, 2)
            ]);

            return response()->json([
                'message' => 'Checked out',
                'data' => $attendance
            ]);
        }
    }
}