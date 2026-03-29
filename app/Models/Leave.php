<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leave extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'leave_type',
        'reason',
        'start_date',
        'end_date',
        'total_days',
        'status',
    ];

    // This allows you to do $leave->user->first_name in your code
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}