<?php

namespace App\Models\General\World;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $fillable = [
        'name',
        'code',
        'iso_code',
        'short',
        'state_id',
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

    public function state(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(State::class);
    }
}
