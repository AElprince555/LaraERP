<?php

namespace Database\Seeders\General\Nav;

use App\Models\Application;
use App\Models\Method;
use Illuminate\Database\Seeder;

class MethodSeeder extends Seeder
{
    public function run(): void
    {
        $applications = Application::all();
       foreach ($applications as $application) {
           Method::create([
               'name'=>$application->name.' create',
               'code'=>$application->code.'-C',
               'short'=>$application->short.'.create',
               'disc'=>"this method to create new item in $application->name",
               'application_id' => $application->id,
           ]);
       }
    }
}
