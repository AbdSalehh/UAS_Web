<?php

namespace App\Http\Livewire;

use Livewire\Component;

class RegisterComponent extends Component
{
    public function render()
    {
        return view('livewire.register-component')->layout('layouts.index');
    }
}