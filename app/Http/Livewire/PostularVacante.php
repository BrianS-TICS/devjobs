<?php

namespace App\Http\Livewire;

use App\Models\Vacante;
use Livewire\Component;
use Livewire\WithFileUploads;

class PostularVacante extends Component
{
    use WithFileUploads;

    public $cv;
    public $vacante;

    protected $rules = [
        'cv' => 'required|mimes:pdf'
    ];

    public function mount(Vacante $vacante){
        $this->vacante = $vacante;
    }

    public function postularme()
    {
        $datos = $this->validate();

        // Almacenar cv en disco duro
        $cv = $this->cv->store('public/cv');
        $datos['cv'] = str_replace('public/cv/', '', $cv);

        // Crear el candidato en vacante
        $this->vacante->candidatos()->create([
            'user_id' => auth()->user()->id,
            'cv' => $datos['cv']
        ]);

        // Crear notificacion y enviar email

        // Mostrar al usuario un mensaje

    }


    public function render()
    {
        return view('livewire.postular-vacante');
    }
}
