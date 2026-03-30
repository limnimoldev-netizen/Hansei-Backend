<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Employee extends Model

{
    protected $table = 'employees';

    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'status',
    ];

    public function attendances(): HasMany

    {
        return $this->hasMany(Attendance::class);
    }
}

