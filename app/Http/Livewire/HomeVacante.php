<?php

namespace App\Http\Livewire;

use App\Models\Vacante;
use Livewire\Component;

class HomeVacante extends Component
{
    public function render()
    {
        $vacantes = Vacante::all();


        return view('livewire.home-vacante', [
            'vacantes' => $vacantes
        ]);
    }
}
