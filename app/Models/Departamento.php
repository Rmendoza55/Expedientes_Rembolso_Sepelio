<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    use HasFactory;


    public function provincias(){
        return $this->hasMany('App/Models/Provincia');
    }

    public function acreditados(){
        return $this->hasMany('App/Models/Acreditado');
    }

    public function fallecidos(){
        return $this->hasMany('App/Models/Fallecido');
    }
}
