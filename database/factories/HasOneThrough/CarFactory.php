<?php

namespace Database\Factories\HasOneThrough;

use App\Facades\FakerFacade;
use App\Models\HasOneThrough\Car;
use App\Models\HasOneThrough\Mechanic;
use Illuminate\Database\Eloquent\Factories\Factory;

class CarFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Car::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // $faker = app('Faker\Factory');

        return [
            'model' => FakerFacade::vehicle(),
            'mechanic_id' => Mechanic::factory(),
        ];
    }
}
