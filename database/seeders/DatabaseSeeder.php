<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\General\Nav\AppSeeder;
use Database\Seeders\General\Nav\MethodSeeder;
use Database\Seeders\General\Nav\ModuleSeeder;
use Database\Seeders\General\Nav\SubModuleSeeder;
use Database\Seeders\General\World\CitySeeder;
use Database\Seeders\General\World\CountrySeeder;
use Database\Seeders\General\World\CurrencySeeder;
use Database\Seeders\General\World\PeriodSeeder;
use Database\Seeders\General\World\StateSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'LaraERP',
            'email' => 'admin@laraerp.com',
            'password' => '01011263555'
        ]);
        $this->call([
            ModuleSeeder::class,
            SubModuleSeeder::class,
            AppSeeder::class,
            MethodSeeder::class,
            CountrySeeder::class,
            StateSeeder::class,
            CitySeeder::class,
            PeriodSeeder::class,
            CurrencySeeder::class,
        ]);
    }
}
