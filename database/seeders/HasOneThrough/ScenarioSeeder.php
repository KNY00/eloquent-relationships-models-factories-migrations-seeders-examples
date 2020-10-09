<?php

namespace Database\Seeders\HasOneThrough;

use Database\Seeders\HasOneThrough\OwnerSeeder;
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
            OwnerSeeder::class,
        ]);
    }
}
