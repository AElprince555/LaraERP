<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Module extends Model
{
    protected $fillable = [
        'name',
        'code',
        'short',
        'disc',
        'view',
        'component',
        'eloquent',
        'permissions',
        'log',
        'settings',
    ];

    protected function casts(): array
    {
        return [
            'permissions' => 'array',
            'log' => 'array',
            'settings' => 'array',
        ];
    }

    public function subModules(): HasMany
    {
        return $this->hasMany(SubModule::class, 'module_id');
    }

    public function applications(): HasMany
    {
        return $this->hasMany(Application::class, 'module_id');
    }

    public function methods(): HasMany
    {
        return $this->hasMany(Method::class, 'module_id');
    }
}
