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
        'email',
        'phone_number',
        'nationality',
        'date_of_birth',
        'gender',
        'marital_status',
        'address',
        'mother_name',
        'parent_guardian_phone',
        'parent_guardian_address',
        'education_level',
        'course_of_study',
        'university',
        'completion_status',
        'job_title',
        'industry',
        'business_nature',
        'career_path',
        'statement',
    ];
}
