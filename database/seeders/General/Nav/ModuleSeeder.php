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
                'name' => 'general module',
                'code' => 'GM',
                'short' => 'general',
                'disc' => 'this module for handle all general data in application',
                'view' => 'general',
                'component' => '\General',
                'permissions' => null,
                'log' => json_encode(['created' => ['time' => now(), 'created_by' => 'system']]),
                'settings' => json_encode(['display-columns' => null, 'show-columns' => null, 'selected-columns' => null, 'main_view' => null]),
            ],
            [
                'name' => 'human resource module',
                'code' => 'HR',
                'short' => 'human_resource',
                'disc' => 'this module for handle all human resource data in application',
                'view' => 'human_resource',
                'component' => '\HumanResource',
                'permissions' => null,
                'log' => json_encode(['created' => ['time' => now(), 'created_by' => 'system']]),
                'settings' => json_encode(['display-columns' => null, 'show-columns' => null, 'selected-columns' => null, 'main_view' => null]),
            ],
            [
                'name' => 'finance module',
                'code' => 'FN',
                'short' => 'finance',
                'disc' => 'this module for handle all finance data in application',
                'view' => 'finance',
                'component' => '\Finance',
                'permissions' => null,
                'log' => json_encode(['created' => ['time' => now(), 'created_by' => 'system']]),
                'settings' => json_encode(['display-columns' => null, 'show-columns' => null, 'selected-columns' => null, 'main_view' => null]),
            ],
            [
                'name' => 'operation module',
                'code' => 'OP',
                'short' => 'operation',
                'disc' => 'this module for handle all operation data in application',
                'view' => 'operation',
                'component' => '\Operation',
                'permissions' => null,
                'log' => json_encode(['created' => ['time' => now(), 'created_by' => 'system']]),
                'settings' => json_encode(['display-columns' => null, 'show-columns' => null, 'selected-columns' => null, 'main_view' => null]),
            ],
            [
                'name' => 'inventory module',
                'code' => 'IV',
                'short' => 'inventory',
                'disc' => 'this module for handle all inventory data in application',
                'view' => 'inventory',
                'component' => '\Inventory',
                'permissions' => null,
                'log' => json_encode(['created' => ['time' => now(), 'created_by' => 'system']]),
                'settings' => json_encode(['display-columns' => null, 'show-columns' => null, 'selected-columns' => null, 'main_view' => null]),
            ],
        ]);
    }
}
