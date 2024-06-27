<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SubModule extends Model
{
    protected $fillable = [
        'name',
        'code',
        'short',
        'disc',
        'module_id',
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

    public function module(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Module::class);
    }

    public function applications(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Application::class, 'sub_module_id');
    }

    public function methods(): HasMany
    {
        return $this->hasMany(Method::class, 'sub_module_id');
    }
}
