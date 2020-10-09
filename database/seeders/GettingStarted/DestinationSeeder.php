<?php

namespace Database\Seeders\GettingStarted;

use App\Models\GettingStarted\Destination;
use Illuminate\Database\Seeder;

class DestinationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Destination::factory()
        ->count(50)
        ->create();
    }
}
