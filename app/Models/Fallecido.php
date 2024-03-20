<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fallecido extends Model
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

    public function tipo_seguro(){
        return $this->belongsTo('App\Models\Tipo_Seguro');
    }

    public function sepelio(){
        return $this->hasOne('App\Models\Sepelio');
    }
}
