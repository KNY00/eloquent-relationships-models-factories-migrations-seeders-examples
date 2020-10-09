<?php

namespace Database\Seeders\HasManyThrough;

use App\Models\HasManyThrough\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::factory()
        ->count(50)
        ->create();
    }
}
