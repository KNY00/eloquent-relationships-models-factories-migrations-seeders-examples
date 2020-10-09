<?php

namespace Database\Factories\HasOneThrough;

use App\Models\HasOneThrough\Mechanic;
use Illuminate\Database\Eloquent\Factories\Factory;

class MechanicFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Mechanic::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => 'Mechanic: '.$this->faker->firstName().' '.$this->faker->lastName(),
        ];
    }
}
