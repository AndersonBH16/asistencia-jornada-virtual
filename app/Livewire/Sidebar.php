<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class Sidebar extends Component
{
    
    public $modulos;
    public $permisos;   

    
    #[On('infoRecibida')] 
    public function actualizarInfo($data)
    {
        $this->modulos = $data['modulos'];
        $this->permisos = $data['permisos'];
    }
    
    public function render()
    {
        return view('livewire.sidebar');
    }
}
