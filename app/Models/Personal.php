<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'city',
        'country',
        'phone_number',
        'email',
        'passport_number', 
    ];
}
