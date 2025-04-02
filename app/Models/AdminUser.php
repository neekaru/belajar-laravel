<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminUser extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'nama',
        'username',
        'email',
        'password',
        'nomor_telepon',
        'role',
        'status',
        'terakhir_login',
    ];
    
    protected $hidden = [
        'password',
        'remember_token',
    ];
    
    protected $casts = [
        'terakhir_login' => 'datetime',
    ];
}
