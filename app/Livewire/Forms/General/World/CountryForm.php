<?php

namespace App\Livewire\Forms\General\World;

use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class CountryForm extends Form
{
  /*  #[Validate(['required' , 'unique:countries,name'])]
    public $name = '';

    #[Validate(['required','unique:countries,code'])]
    public $code = '';

    #[Validate(['required','unique:countries,iso_code'])]
    public $iso_code = '';

    #[Validate(['nullable'])]
    public $flag = '';

    #[Validate(['nullable'])]
    public $short = '';

    #[Validate(['nullable'])]
    public $permissions = '';

    #[Validate(['nullable'])]
    public $log = '';

    #[Validate(['nullable'])]
    public $settings = '';*/
    public $id;
 /*   public function mount($id = null)
    {
        $this->id = $id;
    }*/
    public $name;
    public $code;
    public $iso_code;
    public $flag;
    public $short;
    public $permissions;
    public $log;
    public $settings;

    public function rules()
    {
        return [
            'name' => ['required',\Illuminate\Validation\Rule::unique('countries', 'name')->ignore($this->id)],
            'code' => ['required',\Illuminate\Validation\Rule::unique('countries', 'code')->ignore($this->id)],
            'iso_code' => ['required' , \Illuminate\Validation\Rule::unique('countries', 'iso_code')->ignore
            ($this->id)],
            'flag' => ['nullable' , 'url'],
            'short' => 'nullable',
            'permissions' => ['nullable' , 'array'],
            'log' => ['nullable' , 'array'],
            'settings' => ['nullable','array'],
        ];
    }
}
