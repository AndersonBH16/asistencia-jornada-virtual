<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regimen extends Model
{
    use HasFactory;

    //relacion de uno a muchos
    public function trabajador(){
        return $this->hasMany('App\Models\Trabajador');
    }
}
