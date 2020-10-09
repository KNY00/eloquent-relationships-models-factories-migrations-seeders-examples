<?php

namespace Database\Factories\OneToMany;

use App\Models\OneToMany\Post;
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
            'post_content' => $this->faker->paragraph(3)
        ];
    }
}
