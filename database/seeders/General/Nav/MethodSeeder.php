<?php

namespace Database\Seeders\General\Nav;

use App\Models\Application;
use App\Models\Method;
use Illuminate\Database\Seeder;

class MethodSeeder extends Seeder
{
    public function run(): void
    {
        Method::insert([
//countries application methods
            [
                'name' => 'countries view',
                'code' => Application::where('code', 'GM-WM-CM')->first()->code . '-V',
                'short' => Application::where('code', 'GM-WM-CM')->first()->short . '.view',
                'disc' => 'view',
                'component' => \App\Livewire\Methods\General\World\Countries\View::class,
                'view' => 'methods.general.world.countries.view',
                'application_id' => Application::where('code', 'GM-WM-CM')->first()->id,
                'settings'=>null
            ],
            [
                'name' => 'countries create',
                'code' => Application::where('code', 'GM-WM-CM')->first()->code . '-C',
                'short' => Application::where('code', 'GM-WM-CM')->first()->short . '.create',
                'disc' => 'create',
                'component' => \App\Livewire\Methods\General\World\Countries\Create::class,
                'view' => 'methods.general.world.countries.create',
                'application_id' => Application::where('code', 'GM-WM-CM')->first()->id,
                'settings'=>null

            ],
            [
                'name' => 'countries delete',
                'code' => Application::where('code', 'GM-WM-CM')->first()->code . '-D',
                'short' => Application::where('code', 'GM-WM-CM')->first()->short . '.delete',
                'disc' => 'delete',
                'component' => \App\Livewire\Methods\General\World\Countries\Delete::class,
                'view' => 'methods.general.world.countries.delete',
                'application_id' => Application::where('code', 'GM-WM-CM')->first()->id,
                'settings'=>null
            ],
            [
                'name' => 'countries edit',
                'code' => Application::where('code', 'GM-WM-CM')->first()->code . '-E',
                'short' => Application::where('code', 'GM-WM-CM')->first()->short . '.edit',
                'disc' => 'edit',
                'component' => \App\Livewire\Methods\General\World\Countries\Edit::class,
                'view' => 'methods.general.world.countries.edit',
                'application_id' => Application::where('code', 'GM-WM-CM')->first()->id,
                'settings'=> json_encode([
                    'data'=>['object_name'=>'country']
                ]),
            ],
            [
                'name' => 'countries form',
                'code' => Application::where('code', 'GM-WM-CM')->first()->code . '-F',
                'short' => Application::where('code', 'GM-WM-CM')->first()->short . '.form',
                'disc' => 'form',
                'component' => \App\Livewire\Methods\General\World\Countries\FormModal::class,
                'view' => 'methods.general.world.countries.form-modal',
                'application_id' => Application::where('code', 'GM-WM-CM')->first()->id,
                'settings'=> json_encode([
                    'data'=>['object_name'=>'country']
                ]),
            ],
        ]);
    }
}
