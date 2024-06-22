<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    protected $fillable = [
        'name',
        'code',
        'short',
        'sub_module_id',
        'main_view',
        'controller',
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

    public function subModule(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(SubModule::class);
    }

    public function methods(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Method::class, 'application_id');
    }
}
