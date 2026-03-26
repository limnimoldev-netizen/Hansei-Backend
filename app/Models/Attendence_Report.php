<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SalaryReport extends Model
{
    protected $fillable = [
        'employee_id',
        'attendance_report_id',
        'base_salary',
        'overtime_pay',
        'deduction',
        'net_salary'
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }
}