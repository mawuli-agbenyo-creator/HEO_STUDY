<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studentM extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $fillable = [
        'full_name',
        'date_of_birth',
        'email',
        'mobile_number',
        'gender',
        'zip',
        'level',
        'university',
        'course',
        'address_type',
        'nationality',
        'state',
        'district',
        'block_number',
        'Passport',
        'guardian_name',
        'guardian_phone_number',
        'emergency',
       
    ];


    // protected $guard = [];
}
