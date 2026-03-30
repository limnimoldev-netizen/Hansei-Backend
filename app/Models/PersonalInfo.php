<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PersonalInfo extends Model
{
    protected $table = 'personal_infos';

    protected $primaryKey = 'id';
    protected $fillable = [
        'address',
        'city',
        'country',
        'phone_number',
        'email',
        'passport_number',
    ];

 
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}