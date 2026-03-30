<?php

namespace App\Http\Controllers;

use App\Models\SalaryReport;
use Illuminate\Http\Request;

class SalaryReportController extends Controller
{
    public function index()
    {
        return SalaryReport::all();
    }
}