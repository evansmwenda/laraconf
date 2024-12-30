<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Speaker;

class SpeakerFactory extends Factory
{

    protected $model = Speaker::class;


    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->safeEmail(),
            'bio' => $this->faker->text(),
            'twitter_handle' => $this->faker->word(),
        ];
    }
}
