<?php

namespace Database\Seeders\HasOneThrough;

use App\Models\HasOneThrough\Owner;
use Illuminate\Database\Seeder;

class OwnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Owner::factory()
        ->count(50)
        ->create();
    }
}
