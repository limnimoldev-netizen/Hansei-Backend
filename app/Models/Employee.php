<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 
        'phone_number', 
        'status'
    ];

    // This tells Laravel: "An employee belongs to one User"
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Link to their many attendance records
    public function attendances()
    {
        return $this->hasMany(Attendance::class);
    }
}