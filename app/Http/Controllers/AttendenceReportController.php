<?php

namespace App\Http\Controllers;

use App\Models\AttendenceReport;
use Illuminate\Http\Request;

class AttendenceReportController extends Controller
{
    public function index()
    {
        // return all attendance reports with related user
        return AttendenceReport::with('user')->get();
    }
}   