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
        'ward_number',
        'father_name',
        'mother_name',
        'grandfather_name',
        'spouse_name',
        'father_in_law_name',
        'mother_in_law_name',
    ];


    // protected $guard = [];
}
