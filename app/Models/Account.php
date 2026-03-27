<?php

namespace App\Models;

// Change this line
use Illuminate\Foundation\Auth\User as Authenticatable; 
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Sanctum\HasApiTokens; // Add this for Nuxt communication

class Account extends Authenticatable
{
    use HasFactory, HasApiTokens;

    protected $table = 'accounts'; // Ensure it matches your migration

    protected $fillable = [
        'user_id',
        'username',
        'password',
    ];

    protected $hidden = [
        'password',
    ];

    // This tells Laravel to look for 'user_id' instead of 'email'
    public function getAuthIdentifierName()
    {
        return 'user_id';
    }
}