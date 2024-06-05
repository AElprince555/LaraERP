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
                'name'=>'world management',
                'code'=> Module::where('code','GM')->first()->code.'-WM',
                'module_id'=>Module::where('code','GM')->first()->id,
                'main_view'=>null,
                'permissions'=>null,
                'log'=>null,
                'settings'=>null,
            ],

//            insert Human resource Sub Modules
            [
                'name'=>'multi organization management',
                'code'=> Module::where('code','HR')->first()->code.'-MO',
                'module_id'=>Module::where('code','HR')->first()->id,
                'main_view'=>null,
                'permissions'=>null,
                'log'=>null,
                'settings'=>null,
            ],
            [
                'name'=>'humans management',
                'code'=> Module::where('code','HR')->first()->code.'-HM',
                'module_id'=>Module::where('code','HR')->first()->id,
                'main_view'=>null,
                'permissions'=>null,
                'log'=>null,
                'settings'=>null,
            ],
            [
                'name'=>'documentation management',
                'code'=> Module::where('code','HR')->first()->code.'-DM',
                'module_id'=>Module::where('code','HR')->first()->id,
                'main_view'=>null,
                'permissions'=>null,
                'log'=>null,
                'settings'=>null,
            ],
//            insert Finance Sub Modules
            [
                'name'=>'general ledger management',
                'code'=> Module::where('code','FM')->first()->code.'-GL',
                'module_id'=>Module::where('code','FM')->first()->id,
                'main_view'=>null,
                'permissions'=>null,
                'log'=>null,
                'settings'=>null,
            ],
        ]);
    }
}
