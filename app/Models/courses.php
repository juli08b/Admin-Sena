<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    // Relación con el área
    public function area() {
        return $this->belongsTo(Area::class);
    }

    // Relación con el centro de formación
    public function training_center() {
        return $this->belongsTo(TrainingCenter::class);
    }

    // Relación con el profesor
    public function teacher() {
        return $this->belongsTo(Teacher::class);
    }

    // Relación con los aprendices
    public function apprentices() {
        return $this->hasMany(Apprentice::class);
    }

    // Relación con la tabla course_teachers
    public function course_teachers() {
        return $this->hasMany(CourseTeacher::class);
    }
}
