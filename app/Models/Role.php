<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
   use HasFactory;

   //relacion de muchos a muchos
   public function users(){
        return $this->belongsToMany('App\Models\User'); 
   }

   //relacion de muchos a muchos
   public function tareas(){
        return $this->belongsToMany('App\Models\Tarea');
   }

}
