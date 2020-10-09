<?php

namespace Database\Seeders\GettingStarted;

use Database\Seeders\GettingStarted\DestinationSeeder;
use Database\Seeders\GettingStarted\FlightSeeder;
use Database\Seeders\GettingStarted\UserSeeder;
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
        $this->call([
            UserSeeder::class,
            DestinationSeeder::class,
            FlightSeeder::class,
        ]);
    }
}
