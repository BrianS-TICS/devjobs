<?php

namespace App\Http\Livewire;

use App\Models\Categoria;
use App\Models\Salario;
use Livewire\Component;

class CrearVacante extends Component
{
    public function render()
    {
        // Consultar db
        $salarios = Salario::all();
        $categorias = Categoria::all();

        return view(
            'livewire.crear-vacante',
            [
                "salarios" => $salarios,
                "categorias" => $categorias
            ]
        );
    }
}
