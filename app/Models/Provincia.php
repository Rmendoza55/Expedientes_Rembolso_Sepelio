<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    use HasFactory;

    public function departamentos(){
        return $this->belongsTo('App\Models\Departamento');
    }

    public function distritos(){
        return $this->hasMany('App\Models\Distrito');
    }

    public function acreditados(){
        return $this->hasMany('App\Models\Acreditado');
    }

    public function fallecidos(){
        return $this->hasMany('App\Models\Fallecido');
    }
}
