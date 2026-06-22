<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computers extends Model
{
    use HasFactory;

    protected $fillable = ['number', 'brand'];
    
    // Un aprendiz pertenece a un computador
    public function apprentices() {
        return $this->hasOne('App\Models\Apprentices', 'computer_id');
    }

}
