<?php

namespace App\Livewire\Methods\General\World\Countries;

use App\Models\Application;
use Livewire\Component;

class Update extends Component
{

    public $id;
    public Application $application;
    public function mount(): void
    {
        $this->application = Application::where('short','country')->first();
    }
    public function edit_request(): void
    {
        $this->dispatch('edit_request' , ['id' => $this->id]);
    }
    public function render()
    {
        return view('livewire.methods.general.world.countries.update');
    }
}
