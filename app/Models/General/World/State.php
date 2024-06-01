<?php

namespace App\Models\General\World;

use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $fillable = [
        'name',
        'code',
        'iso_code',
        'short',
        'country_id',
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

    public function country(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Country::class);
    }

    public function cities(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(City::class, 'state_id');
    }
}
