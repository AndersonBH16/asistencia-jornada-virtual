<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sede extends Model
{
    use HasFactory;
     //Relacion uno a muchos
     public function trabajador(){
        return $this->hasMany('App\Models\Trabajador');
    }
}
