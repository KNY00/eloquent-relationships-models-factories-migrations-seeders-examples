<?php

namespace Database\Seeders\OneToOne;

use Database\Seeders\OneToOne\PhoneSeeder;
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
            PhoneSeeder::class
        ]);
    }
}
