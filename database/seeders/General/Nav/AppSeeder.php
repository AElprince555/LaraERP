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
            //create World sub-module Applications for General Management
            [
                'name' => 'countries application',
                'code' => SubModule::where('short', 'world')->first()->code . '-CA',
                'short' =>'country' ,
                'disc'=>'this application is to manage countries in the system',
                'sub_module_id' => SubModule::where('short', 'world')->first()->id,
                'module_id' => SubModule::where('short', 'world')->first()->module->id,
                'view' => SubModule::where('short', 'world')->first()->view . '.countries',
                'component' => SubModule::where('short', 'world')->first()->component . '\Countries',
                'eloquent' => '\App\Models\General\World\Country',
                'permissions' => null,
                'log' => json_encode(['created' => ['time' => now(), 'created_by' => 'system']]),
                'settings' => json_encode([
                    'display'=>['name'=>'name', 'code'=>'code' , 'iso_code'=>'iso_code' , 'flag'=>'flag','short'=>'short'],
                    'show' => ['name' => true , 'code' => true , 'iso_code' => true , 'flag' => false , 'short'=>true ],
                    'sorting'=>['name','code','short','iso_code','flag'],
                ]),
            ],
            [
                'name' => 'states application',
                'code' => SubModule::where('short', 'world')->first()->code . '-SA',
                'short' =>'state',
                'disc' => 'This application is to manage states in the system',
                'sub_module_id' => SubModule::where('short', 'world')->first()->id,
                'module_id' => SubModule::where('short', 'world')->first()->module->id,
                'view' => SubModule::where('short', 'world')->first()->view . '.states',
                'component' => SubModule::where('short', 'world')->first()->component . '\States',
                'eloquent' => '\App\Models\General\World\State',
                'permissions' => null,
                'log' => json_encode(['created' => ['time' => now(), 'created_by' => 'system']]),
                'settings' => json_encode([
                    'display'=>['name'=>'name', 'code'=>'code' , 'iso_code'=>'iso_code' , 'flag'=>'flag','short'=>'short'],
                    'show' => ['name' => true , 'code' => true , 'iso_code' => true , 'flag' => false , 'short'=>true ],
                    'sorting'=>['name','code','short','iso_code','flag'],
                ]),
            ],
            [
                'name' => 'cities application',
                'code' => SubModule::where('short', 'world')->first()->code . '-CTA',
                'short' =>'city',
                'disc' => 'This application is to manage cities in the system',
                'sub_module_id' => SubModule::where('short', 'world')->first()->id,
                'module_id' => SubModule::where('short', 'world')->first()->module->id,
                'view' => SubModule::where('short', 'world')->first()->view . '.cities',
                'component' => SubModule::where('short', 'world')->first()->component . '\Cities',
                'eloquent' => '\App\Models\General\World\City',
                'permissions' => null,
                'log' => json_encode(['created' => ['time' => now(), 'created_by' => 'system']]),
                'settings' => json_encode([
                    'display'=>null,
                    'show' => null,
                    'sorting'=>null
                ]),
            ],
            [
                'name' => 'currencies application',
                'code' => SubModule::where('short', 'world')->first()->code . '-CUA',
                'short' =>'currency',
                'disc' => 'This application is to manage currencies in the system',
                'sub_module_id' => SubModule::where('short', 'world')->first()->id,
                'module_id' => SubModule::where('short', 'world')->first()->module->id,
                'view' => SubModule::where('short', 'world')->first()->view . '.currencies',
                'component' => SubModule::where('short', 'world')->first()->component . '\Currencies',
                'eloquent' => '\App\Models\General\World\Currency',
                'permissions' => null,
                'log' => json_encode(['created' => ['time' => now(), 'created_by' => 'system']]),
                'settings' => json_encode([
                    'display'=>null,
                    'show' => null,
                    'sorting'=>null
                ]),
            ],
            [
                'name' => 'periods application',
                'code' => SubModule::where('short', 'world')->first()->code . '-PA',
                'short' =>'period',
                'disc' => 'This application is to manage periods in the system',
                'sub_module_id' => SubModule::where('short', 'world')->first()->id,
                'module_id' => SubModule::where('short', 'world')->first()->module->id,
                'view' => SubModule::where('short', 'world')->first()->view . '.periods',
                'component' => SubModule::where('short', 'world')->first()->component . '\Periods',
                'eloquent' => '\App\Models\General\World\Period',
                'permissions' => null,
                'log' => json_encode(['created' => ['time' => now(), 'created_by' => 'system']]),
                'settings' => json_encode([
                    'display'=>null,
                    'show' => null,
                    'sorting'=>null
                ]),
            ],
        ]);
    }
}
