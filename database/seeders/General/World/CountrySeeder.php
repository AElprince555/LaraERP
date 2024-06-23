<?php

namespace Database\Seeders\General\World;

use App\Models\Application;
use App\Models\General\World\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder{
    public function run(): void
    {
        Country::insert([
            [
                'name'=>'Egypt',
                'code'=>Application::find(Country::application())->code.'-EG',
                'iso_code'=>'EG-EGY-818',
                'short'=>'EGY'
            ],
            [
                'name'=>'Saudi Arabia',
                'code'=>Application::find(Country::application())->code.'-SA',
                'iso_code'=>'SA-SAU-682',
                'short'=>'SAU'
            ],
        ]);
    }
}
