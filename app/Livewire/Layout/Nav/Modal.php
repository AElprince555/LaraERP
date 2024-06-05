<?php

namespace App\Livewire\Layout\Nav;

use App\Models\Application;
use App\Models\Module;
use App\Models\SubModule;
use Livewire\Component;

class Modal extends Component
{
    public $modules;
    public $selectedModule;
    public $subModules;
    public $selectedSubModule;
    public $applications;

    public function mount(): void
    {
        $this->modules = Module::all();
    }
    public function selectModule(Module $module): void
    {
        $this->reset( 'applications');
        $this->selectedModule = $module;
        $this->subModules = SubModule::where('module_id', $module->id)->get();
    }

    public function selectSubModule(SubModule $subModule): void
    {
        $this->selectedSubModule = $subModule;
        $this->applications = Application::where('sub_module_id', $subModule->id)->get();
    }
    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|\Illuminate\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('livewire.layout.nav.modal');
    }
}
