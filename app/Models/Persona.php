<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    public function acreditados(){
        return $this->hasOne('App\Models\Acreditado');
    }

    public function fallecido(){
        return $this->hasOne('App\Models\Fallecido');
    }
}
