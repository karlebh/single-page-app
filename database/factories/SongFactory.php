<?php

namespace Database\Factories;

use App\Models\Song;
use App\Models\User;
use App\Models\Artist;
use Illuminate\Database\Eloquent\Factories\Factory;

class SongFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Song::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'name' => Artist::factory(),
            'duration' => (random_int(20, 200) / 10),
            'download_count' => random_int(10, 1000),
            'hit' => true,
        ];
    }
}
