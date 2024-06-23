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
               'name'=>'countries view',
               'code'=>Application::where('code' , 'GM-WM-CM')->first()->code.'-V',
               'short'=>Application::where('code', 'GM-WM-CM')->first()->short.'.view',
               'disc'=>'view',
               'component'=>\App\Livewire\Methods\General\World\Countries\View::class,
               'view'=>'methods.general.world.countries.view',
               'application_id'=>Application::where('code' , 'GM-WM-CM')->first()->id,
           ],
           [
               'name'=>'countries create',
               'code'=>Application::where('code' , 'GM-WM-CM')->first()->code.'-C',
               'short'=>Application::where('code', 'GM-WM-CM')->first()->short.'.create',
               'disc'=>'create',
               'component'=>\App\Livewire\Methods\General\World\Countries\Create::class,
               'view'=>'methods.general.world.countries.create',
               'application_id'=>Application::where('code' , 'GM-WM-CM')->first()->id,
           ]
       ]);
    }
}
