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
                'name'=>'countries management',
                'code'=>SubModule::where('code' , 'GM-WM')->first()->code.'-CM',
                'sub_module_id'=> SubModule::where('code','GM-WM')->first()->id,
                'main_view'=>null,
                'controller'=>null,
                'eloquent'=>'\App\Models\General\World\Country',
                'permissions'=>null,
                'log'=>null,
                'settings'=>null,
            ],
            [
                'name'=>'states management',
                'code'=>SubModule::where('code' , 'GM-WM')->first()->code.'-SM',
                'sub_module_id'=> SubModule::where('code','GM-WM')->first()->id,
                'main_view'=>null,
                'controller'=>null,
                'eloquent'=>'\App\Models\General\World\State',
                'permissions'=>null,
                'log'=>null,
                'settings'=>null,
            ],
            [
                'name'=>'city management',
                'code'=>SubModule::where('code' , 'GM-WM')->first()->code.'-CT',
                'sub_module_id'=> SubModule::where('code','GM-WM')->first()->id,
                'main_view'=>null,
                'controller'=>null,
                'eloquent'=>'\App\Models\General\World\City',
                'permissions'=>null,
                'log'=>null,
                'settings'=>null,
            ],
            [
                'name'=>'currencies management',
                'code'=>SubModule::where('code' , 'GM-WM')->first()->code.'-CR',
                'sub_module_id'=> SubModule::where('code','GM-WM')->first()->id,
                'main_view'=>null,
                'controller'=>null,
                'eloquent'=>'\App\Models\General\World\Currency',
                'permissions'=>null,
                'log'=>null,
                'settings'=>null,
            ],
            [
                'name'=>'periods management',
                'code'=>SubModule::where('code' , 'GM-WM')->first()->code.'-PM',
                'sub_module_id'=> SubModule::where('code','GM-WM')->first()->id,
                'main_view'=>null,
                'controller'=>null,
                'eloquent'=>'\App\Models\General\World\Period',
                'permissions'=>null,
                'log'=>null,
                'settings'=>null,
            ],
        ]);
    }
}
