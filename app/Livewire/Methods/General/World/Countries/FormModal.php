<?php

namespace App\Livewire\Methods\General\World\Countries;

use App\Livewire\Forms\General\World\CountryForm;
use App\Models\Application;
use App\Models\General\World\Country;
use Livewire\Component;

class FormModal extends Component
{
    public $id ;
    public Country $country;
    public $show=false;
    public CountryForm $form;
    public function mount($country = null)
    {
        if ($country) {
            $this->id = $country->id;
            $this->form->id = $country->id;
            $this->form->name = $country->name;
            $this->form->code = $country->code;
            $this->form->iso_code = $country->iso_code;
            $this->form->flag = $country->flag;
            $this->form->short= $country->short;
            $this->form->permissions = $country->permissions;
            $this->form->log = $country->log;
            $this->form->settings = $country->settings;
        }
    }
    public function save(): void
    {
        $this->validate();
        $this->form->code = Application::find(Country::application())->code .'-'. strtoupper($this->form->code);
        Country::create($this->form->all());
        $this->form->reset();
        $this->dispatch('record-created' , ['modal'=>"country-form-modal".($this->id) ? "-$this->id" : '']);
    }
    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('livewire.methods.general.world.countries.form-modal');
    }
}
