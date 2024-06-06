<?php

namespace Database\Factories\General\World;

use App\Models\General\World\Country;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class CountryFactory extends Factory
{
    protected $model = Country::class;

    public function definition()
    {
        return [
            'name' => $this->faker->country(),
            'code' => $this->faker->countryCode(),
            'iso_code' => $this->faker->countryISOAlpha3(),
            'short' => $this->faker->word(),
        ];
    }
}
