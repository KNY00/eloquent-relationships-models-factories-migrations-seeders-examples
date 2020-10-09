<?php

namespace Database\Factories\ManyToMany;

use App\Models\ManyToMany\Role;
use App\Models\ManyToMany\RoleUser;
use App\Models\ManyToMany\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoleUserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = RoleUser::class;

    /**
     * holds all possible roles of a user
     * key is user id
     * value is an array of roles.
     *
     * @var array[]
     */
    protected static $reminder = [];

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // Generate roles object if it does not exist
        (count(self::$reminder) === 0) ? self::generateRandomRolesForUser(range(1, User::all()->count())) : false;

        $userId = $this->faker->randomElement(array_keys(self::$reminder));
        $roleId = $this->getUniqueRoleFromRange($userId);

        return [
            'user_id' => $userId,
            'role_id' => $roleId,
        ];
    }

    /**
     * fills self::$reminder.
     *
     * @param int[] $userIds
     */
    public static function generateRandomRolesForUser($userIds)
    {
        $roleEntries = Role::all()->count();

        foreach ($userIds as $userId) {
            $roleRange = range(1, $roleEntries);

            // roles already assigned
            $assignedRoles = RoleUser::where('user_id', $userId)->get()->map(function ($item, $key) {
                return $item->role_id;
            })->toArray();

            // this line shouldn't be needed
            $assignedRolesUnique = array_unique($assignedRoles);

            // remove roles that already have assigned with a previous seeder
            $availableRoles = \array_diff($roleRange, $assignedRolesUnique);

            if (count($availableRoles) > 0) {
                self::$reminder[$userId] = $roleRange;
            }
        }
    }

    /**
     * Gets a random role for a given user.
     *
     * @param int $userId
     * @return int role id
     */
    public function getUniqueRoleFromRange($userId)
    {
        $roleId = $this->faker->randomElement(self::$reminder[$userId]);

        self::deleteRoleFromRange($userId, $roleId);

        return $roleId;
    }

    /**
     * Removes a role from the list of available roles for a user.
     *
     * @param int $userId
     * @param int $roleId
     */
    protected static function deleteRoleFromRange($userId, $roleId)
    {
        if (($key = array_search($roleId, self::$reminder[$userId])) !== false) {
            unset(self::$reminder[$userId][$key]);

            // if list of roles is empty
            // we delete the user from the potential list of roles giveable
            if (count(self::$reminder[$userId]) === 0) {
                unset(self::$reminder[$userId]);
            }
        }
    }
}
