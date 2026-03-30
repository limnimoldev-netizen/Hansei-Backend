<?php

namespace App\Http\Controllers;

use App\Models\Leave;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LeaveController extends Controller
{
    /**
     * Display a listing of all leave requests.
     */
    public function index()
    {
        // Using with('user') assumes you have a 'user' relationship in your Leave model
        return Leave::with('user')->orderBy('created_at', 'desc')->get();
    }

    /**
     * Store a newly created leave request in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'leave_type' => 'required|string',
            'reason'     => 'required|string',
            'start_date' => 'required|date',
            'end_date'   => 'required|date|after_or_equal:start_date',
            'total_days' => 'required|integer',
        ]);

        // This creates the leave and automatically sets the user_id
        $leave = Auth::user()->leaves()->create($validated);

        return response()->json([
            'message' => 'Leave request sent successfully!',
            'data'    => $leave
        ], 201);
    }

    /**
     * Update the leave status.
     */
    public function update(Request $request, $id) 
    {
        $request->validate([
            'status' => 'required|in:pending,approved,rejected'
        ]);

        $leave = Leave::find($id);

        if (!$leave) {
            return response()->json(['message' => 'Record not found'], 404);
        }

        $leave->update(['status' => $request->status]);

        return response()->json([
            'message' => 'Leave status updated to ' . $request->status,
            'data'    => $leave
        ]);
    }

    /**
     * Remove a leave record.
     */
    public function destroy($id) 
    {
        $leave = Leave::find($id);

        if (!$leave) {
            return response()->json(['message' => 'Record not found'], 404);
        }

        $leave->delete();

        return response()->json([
            'message' => 'Leave record deleted successfully.'
        ]);
    }
}