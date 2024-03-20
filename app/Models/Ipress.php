<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ipress extends Model
{
    use HasFactory;

    public function sepelios(){
        return $this->hasMany('App\Models\Sepelio');
    }
}
