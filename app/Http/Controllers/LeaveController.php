<?php

namespace App\Http\Controllers;

use App\Models\Leave;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class LeaveController extends Controller
{
    public function index()
    {
        return Leave::with('user')->orderBy('created_at', 'desc')->get();
    }

    // ... (store and show stay the same)

    /**
     * Update the leave status using ID.
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
     * Remove a leave record using ID.
     */
    public function destroy($id) 
    {
        $leave = Leave::find($id);

        if (!$leave) {
            return response()->json(['message' => 'Record already gone or not found'], 404);
        }

        $leave->delete();

        return response()->json([
            'message' => 'Leave record deleted successfully.'
        ]);
    }
}