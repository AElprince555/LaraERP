<?php

namespace Database\Seeders\General\World;

use App\Models\General\World\Country;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder{
    public function run(): void
    {
        Country::factory()->count(100)->create();
    }
}
