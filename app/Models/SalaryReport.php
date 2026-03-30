<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SalaryReport extends Model
{
    protected $table = 'salary_reports';

    protected $primaryKey = 'id';

    protected $fillable = [
        'employee_id',
        'attendance_report_id',
        'base_salary',
        'overtime_pay',
        'deduction',
        'net_salary',
    ];

    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }

    public function attendanceReport(): BelongsTo
    {
        return $this->belongsTo(AttendanceReport::class);
    }
}