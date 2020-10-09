<?php

namespace Database\Seeders\OneToOne;

use App\Models\OneToOne\Phone;
use Illuminate\Database\Seeder;

class PhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Phone::factory()
        ->count(50)
        ->create();
    }
}
