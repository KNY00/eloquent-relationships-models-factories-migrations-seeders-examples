<?php

namespace Database\Seeders\ManyToMany;

use App\Models\ManyToMany\Role;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // custom role names
        if (Role::all()->count() === 0) {
            $roleNames = [
                ['name' => 'Death Knight'],
                ['name' => 'Demon Hunter'],
                ['name' => 'Druid'],
                ['name' => 'Hunter'],
                ['name' => 'Mage'],
                ['name' => 'Monk'],
                ['name' => 'Paladin'],
                ['name' => 'Priest'],
                ['name' => 'Rogue'],
                ['name' => 'Shaman'],
                ['name' => 'Warlock'],
                ['name' => 'Warrior'],
            ];

            Role::factory()
            ->count(12)
            ->state(new Sequence(...$roleNames))
            ->create();
        } else {
            Role::factory()
            ->count(12)
            ->create();
        }
    }
}
