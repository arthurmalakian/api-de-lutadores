<?php

namespace Database\Factories;

use App\Models\Fighter;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Http;

class FighterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

    // Obrigado laravel :)
    protected $model = Fighter::class;

    public function definition()
    {
        $gender = $this->faker->randomElement(['male','female','other']);
        return [
            'name' => $this->faker->name($gender),
            'weight' => $this->faker->numberBetween(18,100),
            'pow' => $this->faker->numberBetween(0,100),
            'agi' => $this->faker->numberBetween(0,100),
            'int' => $this->faker->numberBetween(0,100),
            'most_liked_twitter_post' => Http::get('https://mipsum.herokuapp.com/frases/2')->json('frase'),
        ];
    }
}
