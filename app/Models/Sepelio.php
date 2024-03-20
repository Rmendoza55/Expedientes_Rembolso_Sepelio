<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sepelio extends Model
{
    use HasFactory;

    public function distrito(){
        return $this->belongsTo('App\Models\Distrito');
    }

    public function acreditado(){
        return $this->belongsTo('App\Models\Acreditado');
    }

    public function fallecido(){
        return $this->belongsTo('App\Models\Fallecido');
    }

    public function usuario(){
        return $this->belongsTo('App\Models\Usuario');
    }
}
