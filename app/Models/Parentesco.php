<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Parentesco extends Model
{
    use HasFactory;

    public function grados(){
        return $this->belongsTo('App\Models\Grado');
    }

    public function acreditados(){
        return $this->hasOne('App\Models\Acreditado');
    }
}
