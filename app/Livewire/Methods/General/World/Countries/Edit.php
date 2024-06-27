<?php

namespace App\Livewire\Methods\General\World\Countries;

use App\Models\Application;
use Livewire\Component;

class Edit extends Component
{
    public $id;
    public Application $application;
    public function mount()
    {
        $this->application = Application::where('short','country')->first();
    }
    public function edit_request()
    {
        $this->dispatch('edit_request' , ['id' => $this->id]);
    }
    public function render()
    {
        return view('livewire.methods.general.world.countries.edit');
    }
}
