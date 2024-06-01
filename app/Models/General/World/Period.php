<?php

namespace App\Models\General\World;

use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    protected $fillable = [
        'name',
        'disc',
        'from',
        'to',
        'active',
        'permissions',
        'log',
        'settings',
    ];

    protected function casts(): array
    {
        return [
            'from' => 'date',
            'to' => 'date',
            'active' => 'boolean',
            'permissions' => 'array',
            'log' => 'array',
            'settings' => 'array',
        ];
    }
}
