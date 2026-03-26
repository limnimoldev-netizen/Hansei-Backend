<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SalaryReport extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'attendance_report_id',
        'base_salary',
        'overtime_pay',
        'deduction',
        'net_salary'
    ];

    /**
     * 1. The Owner
     * This salary belongs to one specific employee.
     */
    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    /**
     * 2. The Calculation Source
     * This salary was calculated based on one specific attendance report.
     */
    public function attendanceReport()
    {
        return $this->belongsTo(AttendanceReport::class);
    }
}