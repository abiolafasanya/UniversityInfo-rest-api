<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_name',
        'description',
        'jamb_cutoff',
        'waec_subjects',
        'universities',
        'career_opportunities',
        'professional_exams',
        'additional_skills',
        'duration'
    ];    
}
