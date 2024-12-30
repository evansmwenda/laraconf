<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Venue;

class VenueFactory extends Factory
{

    protected $model = Venue::class;


    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'city' => $this->faker->city(),
            'country' => $this->faker->country(),
            'postal_code' => $this->faker->postcode(),
        ];
    }
}
