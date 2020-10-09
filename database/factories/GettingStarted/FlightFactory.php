<?php

namespace Database\Factories\GettingStarted;

use App\Models\GettingStarted\Flight;
use Illuminate\Database\Eloquent\Factories\Factory;

class FlightFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Flight::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $currentTime = time();

        // current time +/- 1 day (GMT+0)
        $randomDate = time() - rand(-24 * 60 * 60, 24 * 60 * 60);

        // if the plane has arrived, it is no longer active
        $active = ($randomDate > $currentTime) ? true : false;

        // if it is active, we can consider it is also inactive if randomDate < 12h + current time
        // $active = ($randomDate > ($currentTime + 12)) ? true : false;

        return [
            'active'         => $active,
            'destination'    => $this->faker->city(),
            'name'           => 'ID-Flight-' . $this->faker->lexify('????'),
            'destination_id' => $this->faker->numberBetween(1, 50),
            'arrived_at'     => date('Y-M-d H:i:s', $randomDate), // $this->faker->date('Y-M-d H:i:s'),
        ];
    }
}
