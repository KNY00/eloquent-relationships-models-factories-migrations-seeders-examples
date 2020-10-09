<?php

namespace Database\Seeders\HasManyThrough;

use App\Models\HasManyThrough\Country;
use App\Models\HasManyThrough\User;
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
        $countries = Country::factory()
                    ->count(3)
                    ->has(
                        User::factory()
                        ->count(15)
                        ->state(function (array $attributes, Country $countries) {
                            return ['country_id' => $countries->id];
                        })
                    )
                    ->create();
    }
}
