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

$table->string('course_name');
            $table->text('description');
            $table->string('jamb_cutoff');
            $table->text('waec_subjects');
            $table->text('universities');
            $table->text('career_opportunities');
            $table->text('professional_exams');
            $table->text('additional_skills');
            $table->string('duration');