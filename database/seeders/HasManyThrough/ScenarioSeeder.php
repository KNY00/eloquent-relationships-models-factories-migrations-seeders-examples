<?php

namespace Database\Seeders\HasManyThrough;

use Illuminate\Database\Seeder;
use App\Models\HasManyThrough\Country;
use App\Models\HasManyThrough\User;
use App\Models\HasManyThrough\Post;

class ScenarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $coutrires = Country::factory()
        ->count(3)
        ->has(
            $users = User::factory()
            ->count(15)
            ->state(function (array $attributes, Country $countries) {
                return ['country_id' => $countries->id];
            })
            ->has(
                Post::factory()
                ->count(1)
                ->state(function (array $attributes, User $users) {
                    return ['user_id' => $users->id];
                })
            )
        )
        ->create();

        // $this->call([
        //     PostSeeder::class
        // ]);
    }
}
