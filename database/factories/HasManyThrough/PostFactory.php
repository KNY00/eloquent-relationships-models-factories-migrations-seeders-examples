<?php

namespace Database\Factories\HasManyThrough;

use App\Models\HasManyThrough\Post;
use App\Models\HasManyThrough\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'title'   => $this->faker->paragraph(1),
        ];
    }
}
