<?php

namespace Database\Factories\OneToOne;

use App\Models\OneToOne\Phone;
use App\Models\OneToOne\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PhoneFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Phone::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        static $user_id = 1;

        return [
            'user_id' => User::factory(),
            'phone'   => $this->faker->phoneNumber(),
        ];
    }
}
