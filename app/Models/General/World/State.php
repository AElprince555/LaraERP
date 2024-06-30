<?php

namespace App\Models\General\World;

use App\Models\Application;
use Illuminate\Database\Eloquent\Casts\Attribute;
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
    public static function application(): string
    {
        return Application::where('code', 'GM-WSM-SA')->first()->id;
    }
    public function countryId(): Attribute
    {
        return Attribute::make(
            get: fn(int $value) => Country::find($value)->name,
        );
    }

    protected function casts(): array
    {
        return [
            'name' => 'string',
            'code' => 'string',
            'iso_code' => 'string',
            'short' => 'string',
            'country_id' => Country::class,
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
