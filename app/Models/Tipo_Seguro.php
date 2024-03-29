<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_Seguro extends Model
{
    use HasFactory;

    public function fallecido(){
        return $this->hasOne('App\Models\Fallecido');
    }
}
