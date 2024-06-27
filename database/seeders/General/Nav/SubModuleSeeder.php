<?php

namespace Database\Seeders\General\Nav;

use App\Models\Module;
use App\Models\SubModule;
use Illuminate\Database\Seeder;

class SubModuleSeeder extends Seeder
{
    public function run(): void
    {
        SubModule::insert([
//            insert General Module Sub Modules
            [
                'name'=>'world sub-module',
                'code'=> Module::where('short','general')->first()->code.'-WSM',
                'short'=>'world',
                'disc'=> 'this sub module is to add and define worlds data like countries , currencies , periods ...',
                'module_id'=>Module::where('short','general')->first()->id,
                'view'=>Module::where('short','general')->first()->view.'.world',
                'component'=>Module::where('short','general')->first()->component.'\World',
                'permissions'=>null,
                'log'=>json_encode(['created' => ['time' => now(), 'created_by' => 'system']]),
                'settings' => json_encode(['display-columns' => null, 'show-columns' => null, 'selected-columns' => null, 'main_view' => null]),
            ],

// Human-Resource Modules
            [
                'name' => 'multi organization sub-module',
                'code' => Module::where('short', 'human-resource')->first()->code . '-MOSM',
                'short' => 'multi-organization',
                'disc' => 'this sub module is to add and define multiple organizations...',
                'module_id' => Module::where('short', 'human-resource')->first()->id,
                'view' => Module::where('short', 'human-resource')->first()->view . '.multi-organization',
                'component' => Module::where('short', 'human-resource')->first()->component . '\MultiOrganization',
                'permissions' => null,
                'log' => json_encode(['created' => ['time' => now(), 'created_by' => 'system']]),
                'settings' => json_encode(['display-columns' => null, 'show-columns' => null, 'selected-columns' => null, 'main_view' => null]),
            ],
            [
                'name' => 'humans sub-module',
                'code' => Module::where('short', 'human-resource')->first()->code . '-HSM',
                'short' => 'human',
                'disc' => 'this sub module is to add and manage human resource data...',
                'module_id' => Module::where('short', 'human-resource')->first()->id,
                'view' => Module::where('short', 'human-resource')->first()->view . '.humans',
                'component' => Module::where('short', 'human-resource')->first()->component . '\Humans',
                'permissions' => null,
                'log' => json_encode(['created' => ['time' => now(), 'created_by' => 'system']]),
                'settings' => json_encode(['display-columns' => null, 'show-columns' => null, 'selected-columns' => null, 'main_view' => null]),
            ],
            [
                'name' => 'documentation sub-module',
                'code' => Module::where('short', 'human-resource')->first()->code . '-DSM',
                'short' => 'documentation',
                'disc' => 'this sub module is for managing documentation within the organization...',
                'module_id' => Module::where('short', 'human-resource')->first()->id,
                'view' => Module::where('short', 'human-resource')->first()->view . '.documentation',
                'component' => Module::where('short', 'human-resource')->first()->component . '\Documentation',
                'permissions' => null,
                'log' => json_encode(['created' => ['time' => now(), 'created_by' => 'system']]),
                'settings' => json_encode(['display-columns' => null, 'show-columns' => null, 'selected-columns' => null, 'main_view' => null]),
            ],

// Finance Modules
            [
                'name' => 'general ledger sub-module',
                'code' => Module::where('short', 'finance')->first()->code . '-GLSM',
                'short' => 'general-ledger',
                'disc' => 'this sub module is for managing the general ledger and financial data...',
                'module_id' => Module::where('short', 'finance')->first()->id,
                'view' => Module::where('short', 'finance')->first()->view . '.general-ledger',
                'component' => Module::where('short', 'finance')->first()->component . '\GeneralLedger',
                'permissions' => null,
                'log' => json_encode(['created' => ['time' => now(), 'created_by' => 'system']]),
                'settings' => json_encode(['display-columns' => null, 'show-columns' => null, 'selected-columns' => null, 'main_view' => null]),
            ],
        ]);
    }
}
