<?php

namespace Database\Seeders\ManyToMany;

use Illuminate\Database\Seeder;
use Database\Seeders\ManyToMany\RoleUserSeeder;

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
            RoleUserSeeder::class
        ]);
    }
}
