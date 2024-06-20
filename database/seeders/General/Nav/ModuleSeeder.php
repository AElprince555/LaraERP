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
                'short'=>'general',
                'view'=>null,
                'permissions'=>null,
                'log'=>null,
                'settings'=>null,
            ],
            [
                'name'=>"human resource management",
                'code'=>'HR',
                'short'=>'hr',
                'view'=>null,
                'permissions'=>null,
                'log'=>null,
                'settings'=>null,
            ],
            [
                'name'=>"finance management",
                'code'=>'FM',
                'short'=>'finance',
                'view'=>null,
                'permissions'=>null,
                'log'=>null,
                'settings'=>null,
            ],
            [
                'name'=>"operation management",
                'code'=>'OM',
                'short'=>'operation',
                'view'=>null,
                'permissions'=>null,
                'log'=>null,
                'settings'=>null,
            ],
            [
                'name'=>"inventory management",
                'code'=>'IM',
                'short'=>'inventory',
                'view'=>null,
                'permissions'=>null,
                'log'=>null,
                'settings'=>null,
            ]
        ]);
    }
}
