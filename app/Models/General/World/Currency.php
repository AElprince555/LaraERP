<?php

namespace App\Models\General\World;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    protected $fillable = [
        'name',
        'code',
        'iso_code',
        'short',
        'symbol',
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
}
