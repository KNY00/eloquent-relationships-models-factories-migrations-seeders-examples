<?php

namespace Database\Seeders\HasManyThrough;

use Illuminate\Database\Seeder;
use App\Models\HasManyThrough\Country;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Country::factory()
        ->count(3)
        ->create();
    }
}
