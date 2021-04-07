<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_title',
        'description',
        'jamb_subjects',
        'waec_subjects',
        'universities',
        'career_opportunities',
        'professional_exams',
        'additional_skills',
        'duration'
    ];

}
