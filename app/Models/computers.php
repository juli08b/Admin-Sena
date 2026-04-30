<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    // Relación con el aprendiz
    public function apprentice() {
        return $this->hasOne(Apprentice::class);
    }
}
