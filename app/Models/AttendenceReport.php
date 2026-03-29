<?php

// AttendenceReport.php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AttendenceReport extends Model
{
    protected $table = 'attendence_reports';

    // app/Models/AttendenceReport.php
protected $fillable = [
    'user_id', // Make sure this is here!
    'attendance_id',
    'week_hour',
    'total_month_hour',
    'overtimes',
    'total_present',
    'total_absent',
    'total_lates',
    'total_leave'
];

public function user() {
    return $this->belongsTo(User::class, 'user_id');
}

    public function attendance()
    {
        return $this->belongsTo(\App\Models\Attendance::class, 'attendance_id');
    }
}