<?php

namespace Database\Seeders\OneToMany;

use App\Models\OneToMany\Comment;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comment::factory()
        ->count(50)
        ->create();
    }
}
