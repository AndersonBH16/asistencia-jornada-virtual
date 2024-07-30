<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarea extends Model
{
    use HasFactory;

    //Relacion uno a muchos (inversa)
    public function modulo(){
        return $this->BelongsTo('App\Models\Modulo');
    }

    //relacion muchos a muchos(inversa)
    public function roles(){
        return $this->belongsToMany('App\Models\Role');
    }

    

}
