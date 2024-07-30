<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{
    use HasFactory;

     //Relacion uno a muchos
     public function tarea(){
        return $this->hasMany('App\Models\Tarea');
    }

}
