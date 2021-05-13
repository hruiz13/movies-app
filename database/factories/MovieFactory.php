<?php

namespace Database\Factories;

use App\Models\Movie;
use Illuminate\Database\Eloquent\Factories\Factory;

class MovieFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Movie::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'year' => $this->faker->numberBetween(1900, 2020),
            'imdbID' => $this->faker->numberBetween(0, 5),
            'type' => $this->faker->randomElement(['accion', 'ficcion', 'fantasia', 'terror', 'comedia']),
            'poster' => $this->faker->imageUrl(640, 480),
            'runtime' => $this->faker->sentence(),
            'language' => $this->faker->word(),
            'imdbRating' => $this->faker->numberBetween(0, 5),
            'genre' => $this->faker->randomElement(['accion', 'ficcion', 'fantasia', 'terror', 'comedia']),
            'actors' => $this->faker->name(),
            'description' => $this->faker->paragraph(),
        ];
    }
}
