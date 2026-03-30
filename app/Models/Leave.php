<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Leave extends Model
{
    protected $table = 'leaves';
    
    protected $primaryKey = 'id';

    protected $fillable = [
        'employee_id',
        'leave_type',
        'reason',
        'start_day',
        'end_day',
        'total_day',
        'status',
    ];

    public function employee(): BelongsTo
    {
        return $this->belongsTo(Employee::class);
    }
}