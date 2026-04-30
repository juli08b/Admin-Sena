<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    // Relacion Uno a Muchos
    public function teachers() {
        return $this->hasMany(Teacher::class);
    }

    // Relacion Uno a Muchos
    public function courses() {
        return $this->hasMany(Course::class);
    }
}
