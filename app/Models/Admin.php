<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use Notifiable;

    // Set the table name if it's different from the default
    protected $table = 'users';

    // Fillable fields for mass assignment
    protected $fillable = [
        'email',
        'password',
    ];

    // Hidden attributes
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Casts to convert attributes to native types
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
