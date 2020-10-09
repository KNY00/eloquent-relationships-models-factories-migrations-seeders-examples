<?php

namespace Database\Seeders\GettingStarted;

use App\Models\GettingStarted\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()
        ->count(50)
        ->create();
    }
}
