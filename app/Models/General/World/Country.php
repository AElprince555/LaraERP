<?php

namespace App\Models\General\World;

use App\Models\Application;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'code',
        'iso_code',
        'flag',
        'short',
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
    public static function application() :string
    {
        return Application::where('code','GM-WM-CM')->first()->id;
    }
    public function states(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(State::class, 'country_id');
    }

    public function cities(): \Illuminate\Database\Eloquent\Relations\HasManyThrough
    {
        return $this->hasManyThrough(City::class , State::class);
    }
}
