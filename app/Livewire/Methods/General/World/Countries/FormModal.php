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
    public function mount( $id=null)
    {
        if ($id){
            $this->country = Country::find($id);
            $this->form->id = $this->country->id;
            $this->form->name = $this->country->name;
            $this->form->code = $this->country->code;
            $this->form->iso_code = $this->country->iso_code;
            $this->form->flag = $this->country->flag;
            $this->form->short= $this->country->short;
            $this->form->permissions = $this->country->permissions;
            $this->form->log = $this->country->log;
            $this->form->settings = $this->country->settings;
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
