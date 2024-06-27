<?php

namespace App\Livewire\Methods\General\World\Countries;

use App\Models\Application;
use Livewire\Component;

class Create extends Component
{
    public Application $application ;
    public function mount()
    {
        $this->application =Application::where('short','country')->first();

    }
    public function add_request()
    {
        $this->dispatch('add_request');
    }
    public function render()
    {
        return view('livewire.methods.general.world.countries.create');
    }
}
