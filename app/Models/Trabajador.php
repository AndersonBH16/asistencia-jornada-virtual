<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Trabajador extends Model
{
    use HasFactory;

    //Relacion de unos a uno
    public function user(){
        return $this->BelongsTo('App\Models\User');
    }

    public function regimen(){
        return $this->BelongsTo('App\Models\Regimen');
    }

    public function sede(){
        return $this->BelongsTo('App\Models\Sede');
    }

    public function estructura(){
        return $this->BelongsTo('App\Models\Estructura');
    }



    
}
