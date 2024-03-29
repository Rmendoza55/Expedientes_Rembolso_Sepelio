<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    public function roles(){
        return $this->belongsToMany('App\Models\Rol');
    }

    public function sepelios(){
        return $this->hasMany('App\Models\Sepelio');
    }
}
