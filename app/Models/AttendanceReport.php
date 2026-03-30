<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AttendanceReport extends Model
{
    protected $table = 'attendance_reports';

     protected $primaryKey = 'id';

    protected $fillable = [
        'employee_id',
        'week_hour',
        'total_month_hour',
        'overtimes',
        'total_present',
        'total_absent',
        'total_lates',
        'total_leave',
    ];

    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }

    public function salaryReports(): HasMany
    {
        return $this->hasMany(SalaryReport::class);
    }
}