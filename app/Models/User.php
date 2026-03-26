<?php

namespace App\Models;

// We use Authenticatable instead of just Model for the User
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     * This tells Laravel it's okay to "fill" these columns.
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'gender',
        'email',
        'password',
        'profile_picture',
        'position_id',
        'department_id',
    ];

    /**
     * The attributes that should be hidden for serialization.
     * This keeps your password secret when showing user data.
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     * This ensures the password is encrypted automatically.
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}