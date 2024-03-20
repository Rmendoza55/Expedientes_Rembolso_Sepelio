<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distrito extends Model
{
    use HasFactory;

    public function provincia(){
        return $this->belongsTo('App\Models\Provincia');
    }

    public function acreditados(){
        return $this->hasMany('App\Models\Acreditado');
    }

    public function fallecidos(){
        return $this->hasMany('App\Models\Fallecido');
    }

    public function sepelios(){
        return $this->hasMany('App\Models\Sepelio');
    }
}
