<?php

namespace App\Livewire\Methods\General\World\Countries;

use App\Livewire\Forms\General\World\CountryForm;
use App\Models\Application;
use App\Models\General\World\Country;
use Illuminate\Support\Str;
use Livewire\Component;

class FormModal extends Component
{
    public $id;
    public Country $country;
    public $show = false;
    public CountryForm $form;

    public function mount($id = null)
    {
        if ($id) {
            $this->country = Country::find($id);
            $this->form->id = $this->country->id;
            $this->form->name = $this->country->name;
            $this->form->code = Str::after($this->country->code, Application::find(Country::application())->code . '-');
            $this->form->iso_code = $this->country->iso_code;
            $this->form->flag = $this->country->flag;
            $this->form->short = $this->country->short;
            $this->form->permissions = $this->country->permissions;
            $this->form->log = $this->country->log;
            $this->form->settings = $this->country->settings;
        }
    }

    public function save(): void
    {
        $this->validate();
        $this->form->code = Application::find(Country::application())->code . '-' . strtoupper($this->form->code);
        $this->form->log = array_merge((array)$this->form->log,['create'=>['user' => auth()->user()->id]]);
        Country::create($this->form->all());
        $this->form->reset();
        $this->dispatch('record-created', ['modal' => "country-form-modal" . ($this->id) ? "-$this->id" : '']);
    }

    public function updating($property, $value)
    {
        $property = Str::after($property, 'form.');
        $old = $this->form->$property;
        if ($value != $old and $this->id) {
            $this->form->log = array_merge((array)$this->form->log, ['update-' . now() => ['user' => auth()->user()->id,
                'old' => $old , 'new'=>$value , 'field'=>$property]]);
            $this->form->log = json_encode($this->form->log);
            $this->form->log = json_decode($this->form->log , true);
        }
    }

    public function edit()
    {
        $this->validate();
        $this->form->code = Application::find(Country::application())->code . '-' . strtoupper($this->form->code);
        $this->country->update($this->form->all());
        $this->dispatch('record-updated', ['modal' => "country-form-modal" . ($this->id) ? "-$this->id" : '']);
    }

    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('livewire.methods.general.world.countries.form-modal');
    }
}
