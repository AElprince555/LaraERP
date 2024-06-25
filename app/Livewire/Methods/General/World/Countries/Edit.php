<?php

namespace App\Livewire\Methods\General\World\Countries;

use Livewire\Component;

class Edit extends Component
{
    public $id;
    public function render()
    {
        return view('livewire.methods.general.world.countries.edit');
    }
}
