<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jornada extends Model
{
    use HasFactory;

    //relacion uno a muchos
    public function horarios(){
       return $this->hasMany('App\Models\Horario');
    }

    //relacion muchos a muchos
    public function users(){
        return $this->belongsToMany('App\Models\User');
    }
}
