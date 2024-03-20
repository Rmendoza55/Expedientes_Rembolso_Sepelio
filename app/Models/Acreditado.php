<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acreditado extends Model
{
    use HasFactory;

    public function persona(){
        return $this->belongsTo('App\Models\Persona');
    }

    public function departamentos(){
        return $this->belongsTo('App\Models\Departamento');
    }

    public function provincias(){
        return $this->belongsTo('App\Models\Provincia');
    }

    public function distritos(){
        return $this->belongsTo('App\Models\Distrito');
    }

    public function parentesco(){
        return $this->belongsTo('App\Models\Parentesco');
    }

    public function sepelios(){
        return $this->hasMany('App\Models\Sepelio');
    }
}
