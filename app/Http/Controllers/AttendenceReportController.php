<?php

namespace App\Http\Controllers;

use App\Models\Attendence_Report;
use Illuminate\Http\Request;

class AttendenceReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Attendence_Report::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Attendence_Report $attendence_Report)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Attendence_Report $attendence_Report)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Attendence_Report $attendence_Report)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Attendence_Report $attendence_Report)
    {
        //
    }
}
