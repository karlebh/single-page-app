<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Artist;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArtistFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Artist::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->name();

        return [
            'user_id' => User::factory(),
            'name' => $name,
            'slug' => trim(Str::limit(Str::slug($name), 50, ''), '-'),
            'age' => random_int(20, 200),
            'albums' => $this->faker->sentence(),
            'country' => $this->faker->country(),
            'latest_hit' => $this->faker->sentence(),
        ];
    }
}
