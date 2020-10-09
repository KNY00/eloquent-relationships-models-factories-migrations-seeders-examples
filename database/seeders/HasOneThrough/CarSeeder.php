<?php

namespace Database\Seeders\HasOneThrough;

use Illuminate\Database\Seeder;
use App\Models\HasOneThrough\Car;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Car::factory()
        ->count(50)
        ->create();
    }
}
