<?php

namespace Database\Seeders\General\Nav;

use App\Models\Module;
use Illuminate\Database\Seeder;

class ModuleSeeder extends Seeder
{
    public function run(): void
    {
        Module::insert([
            [
                'name'=>"general module",
                'code'=>'GM',
                'view'=>null,
                'permissions'=>null,
                'log'=>null,
                'settings'=>null,
            ],
            [
                'name'=>"human resource management",
                'code'=>'HR',
                'view'=>null,
                'permissions'=>null,
                'log'=>null,
                'settings'=>null,
            ],
            [
                'name'=>"finance management",
                'code'=>'FM',
                'view'=>null,
                'permissions'=>null,
                'log'=>null,
                'settings'=>null,
            ],
            [
                'name'=>"operation management",
                'code'=>'OM',
                'view'=>null,
                'permissions'=>null,
                'log'=>null,
                'settings'=>null,
            ],
            [
                'name'=>"inventory management",
                'code'=>'IM',
                'view'=>null,
                'permissions'=>null,
                'log'=>null,
                'settings'=>null,
            ]
        ]);
    }
}
