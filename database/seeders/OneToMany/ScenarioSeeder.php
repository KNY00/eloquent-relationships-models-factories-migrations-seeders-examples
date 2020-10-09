<?php

namespace Database\Seeders\OneToMany;

use App\Models\OneToMany\Comment;
use App\Models\OneToMany\Post;
use Illuminate\Database\Seeder;

class ScenarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::factory()
        ->count(10)
        ->has(
            Comment::factory()
            ->count(5)
            ->state(function (array $attributes, Post $posts) {
                return ['post_id' => $posts->id];
            })
        )
        ->create();
    }
}
