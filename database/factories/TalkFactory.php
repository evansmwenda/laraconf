<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Speaker;
use App\Models\Talk;

class TalkFactory extends Factory
{

    protected $model = Talk::class;


    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(4),
            'abstract' => $this->faker->text(),
            'speaker_id' => Speaker::factory(),
        ];
    }
}
