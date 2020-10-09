<?php

namespace Database\Seeders\GettingStarted;

use App\Models\GettingStarted\Flight;
use Illuminate\Database\Seeder;

class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Flight::factory()
        ->count(50)
        ->create();
    }
}
