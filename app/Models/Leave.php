<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    use HasFactory ;

    protected $fillable= [
        'employee_id',
        'leave_type',
        'reason',
        'start_date',
        'end_date',
        'total_day',
        'status',
    ];

}

