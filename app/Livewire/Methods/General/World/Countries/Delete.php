<?php

namespace App\Livewire\Methods\General\World\Countries;

use App\Models\General\World\Country;
use JetBrains\PhpStorm\NoReturn;
use Livewire\Component;

class Delete extends Component
{
    public $id;
    #[NoReturn]
    public function delete(): void
    {
        Country::find($this->id)->delete();
        $this->dispatch('record-deleted');
    }
    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('livewire.methods.general.world.countries.delete');
    }
}
