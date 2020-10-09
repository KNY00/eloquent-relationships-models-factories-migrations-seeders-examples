<?php

namespace Database\Seeders\ManyToMany;

use App\Models\ManyToMany\Role;
use App\Models\ManyToMany\RoleUser;
use App\Models\ManyToMany\User;
use Exception;
use Illuminate\Database\Seeder;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * You can't have more than 600 rows in the current configuration
         * If you want more, you should
         * either augment the count in UserSeeder or RoleSeeder
         * or call the seeders multiple times on the command below.
         */
        define('NUMBER_ROWS', 100);

        $countUsers = User::all()->count();
        $countRoles = Role::all()->count();
        $countRoleUser = RoleUser::all()->count();

        if ($countUsers === 0) {
            $this->call([
                UserSeeder::class, // + 50 users
            ]);
            $countUsers = User::all()->count();
        }

        if ($countRoles === 0) {
            $this->call([
                RoleSeeder::class, // + 12 roles
            ]);
            $countRoles = Role::all()->count();
        }

        // > 600
        if ((NUMBER_ROWS + $countRoleUser) > ($countUsers * $countRoles)) {
            throw new Exception('You can\'t ask for more than (' . ($countUsers * $countRoles) . ') rows');
        }

        RoleUser::factory()
        ->count(NUMBER_ROWS)
        ->create();
    }
}
