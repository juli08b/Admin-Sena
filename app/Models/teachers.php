<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    // Relación con el area
    public function area() {
        return $this->belongsTo(Area::class);
    }

    // Relación con el centro de formación
    public function training_center() {
        return $this->belongsTo(TrainingCenter::class);
    }
    
    // Relación con los cursos
    public function courses() {
        return $this->hasMany(Course::class);
    }

    // Relación con la tabla course_teachers
    public function course_teachers() {
        return $this->hasMany(CourseTeacher::class);
    }
}
