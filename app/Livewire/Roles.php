<?php

namespace App\Livewire;
use App\Models\Role;
use App\Models\Modulo;
use App\Models\User;

use Livewire\Component;
use Livewire\Livewire;

class Roles extends Component
{
    public $roles;  
    public $modulos;
    public $permisos;   

    public function mount(User $user){   
       $this->roles = $user->roles;    
       
    }   

    public function tareas(Role $rol){    
        $this->modulos = collect([]);
        $this->permisos = $rol->tareas->where('estado', 1);      
        foreach($this->permisos as $padre){         
            $mod = Modulo::find($padre->modulo_id);
            if(!$this->modulos->contains('id', $mod->id)){
                $this->modulos->push(['id' => $mod->id, 'nombre' => $mod->nombre,'icono'=> $mod->icono]); 
            }

        }

        $this->dispatch('infoRecibida', ['modulos'=>$this->modulos,'permisos'=>$this->permisos]);
             
    }

    public function render()
    {
        return view('livewire.roles');
    }
}
