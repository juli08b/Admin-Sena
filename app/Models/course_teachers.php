<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseTeachers extends Model
{
    protected $fillable = ['course_id', 'teacher_id'];
}
