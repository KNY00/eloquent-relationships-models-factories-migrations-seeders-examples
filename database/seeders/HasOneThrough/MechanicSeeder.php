<?php

namespace Database\Seeders\HasOneThrough;

use App\Models\HasOneThrough\Mechanic;
use Illuminate\Database\Seeder;

class MechanicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mechanic::factory()
        ->count(50)
        ->create();
    }
}
