<?php

namespace App\Http\Controllers;

use App\Models\AttendanceReport;
use Illuminate\Http\Request;

class AttendanceReportController extends Controller
{
    public function index()
    {
        return AttendanceReport::all();
    }
}