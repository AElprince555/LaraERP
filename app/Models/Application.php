<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Application extends Model
{
    protected $fillable = [
        'name',
        'code',
        'short',
        'disc',
        'sub_module_id',
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

    public function subModule(): BelongsTo
    {
        return $this->belongsTo(SubModule::class);
    }

    public function methods(): HasMany
    {
        return $this->hasMany(Method::class, 'application_id');
    }

    public function module(): BelongsTo
    {
        return $this->belongsTo(Module::class);
    }
}
