<?php

namespace Database\Seeders\General\Nav;

use App\Models\Application;
use App\Models\SubModule;
use Illuminate\Database\Seeder;

class AppSeeder extends Seeder
{
    public function run(): void
    {
        Application::insert([
            //create World management Applications for General Management
            [
                'name' => 'countries management',
                'code' => SubModule::where('code', 'GM-WM')->first()->code . '-CM',
                'short' => SubModule::where('code', 'GM-WM')->first()->short . '.countries',
                'sub_module_id' => SubModule::where('code', 'GM-WM')->first()->id,
                'main_view' => null,
                'controller' => null,
                'eloquent' => '\App\Models\General\World\Country',
                'permissions' => null,
                'log' => null,
                'settings' => json_encode([
                    'display'=>[
                        'name'=>'name',
                        'code'=>'code',
                        'iso_code'=>'iso code',
                        'flag'=>'flag',
                        'short'=>'short'
                    ],
                    'show' => [
                        'name' => true,
                        'code' => false,
                        'iso_code'=>true,
                        'flag' => true,
                        'short'=>true,
                    ],
                    'sorting'=>[
                        'id',
                        'name',
                        'code',
                        'iso_code',
                        'short',
                        'flag',
                        'permissions',
                        'log',
                        'settings',
                        'created_at',
                        'updated_at',
                    ]
                ]),
            ],
            [
                'name' => 'states management',
                'code' => SubModule::where('code', 'GM-WM')->first()->code . '-SM',
                'short' => SubModule::where('code', 'GM-WM')->first()->short . '.states',
                'sub_module_id' => SubModule::where('code', 'GM-WM')->first()->id,
                'main_view' => null,
                'controller' => null,
                'eloquent' => '\App\Models\General\World\State',
                'permissions' => null,
                'log' => null,
                'settings' => null,
            ],
            [
                'name' => 'city management',
                'code' => SubModule::where('code', 'GM-WM')->first()->code . '-CT',
                'short' => SubModule::where('code', 'GM-WM')->first()->short . '.cities',
                'sub_module_id' => SubModule::where('code', 'GM-WM')->first()->id,
                'main_view' => null,
                'controller' => null,
                'eloquent' => '\App\Models\General\World\City',
                'permissions' => null,
                'log' => null,
                'settings' => null,
            ],
            [
                'name' => 'currencies management',
                'code' => SubModule::where('code', 'GM-WM')->first()->code . '-CR',
                'short' => SubModule::where('code', 'GM-WM')->first()->short . '.currencies',
                'sub_module_id' => SubModule::where('code', 'GM-WM')->first()->id,
                'main_view' => null,
                'controller' => null,
                'eloquent' => '\App\Models\General\World\Currency',
                'permissions' => null,
                'log' => null,
                'settings' => null,
            ],
            [
                'name' => 'periods management',
                'code' => SubModule::where('code', 'GM-WM')->first()->code . '-PM',
                'short' => SubModule::where('code', 'GM-WM')->first()->short . '.periods',
                'sub_module_id' => SubModule::where('code', 'GM-WM')->first()->id,
                'main_view' => null,
                'controller' => null,
                'eloquent' => '\App\Models\General\World\Period',
                'permissions' => null,
                'log' => null,
                'settings' => null,
            ],
        ]);
    }
}
