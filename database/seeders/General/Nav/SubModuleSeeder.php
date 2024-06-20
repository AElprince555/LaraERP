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
                'short'=> Module::where('code','GM')->first()->short.'.world',
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
                'short'=> Module::where('code','HR')->first()->short.'.multiorganization',
                'module_id'=>Module::where('code','HR')->first()->id,
                'main_view'=>null,
                'permissions'=>null,
                'log'=>null,
                'settings'=>null,
            ],
            [
                'name'=>'humans management',
                'code'=> Module::where('code','HR')->first()->code.'-HM',
                'short'=> Module::where('code','HR')->first()->short.'.humans',
                'module_id'=>Module::where('code','HR')->first()->id,
                'main_view'=>null,
                'permissions'=>null,
                'log'=>null,
                'settings'=>null,
            ],
            [
                'name'=>'documentation management',
                'code'=> Module::where('code','HR')->first()->code.'-DM',
                'short'=> Module::where('code','HR')->first()->short.'.documentation',
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
                'short'=> Module::where('code','FM')->first()->short.'.generalledger',
                'module_id'=>Module::where('code','FM')->first()->id,
                'main_view'=>null,
                'permissions'=>null,
                'log'=>null,
                'settings'=>null,
            ],
        ]);
    }
}
