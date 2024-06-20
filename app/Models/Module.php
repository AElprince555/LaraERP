<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    protected $fillable = [
        'name',
        'code',
        'short',
        'view',
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

    public function subModules(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(SubModule::class, 'module_id');
    }

    public function applications(): \Illuminate\Database\Eloquent\Relations\HasManyThrough
    {
        return $this->hasManyThrough(Application::class , SubModule::class);
    }
}
