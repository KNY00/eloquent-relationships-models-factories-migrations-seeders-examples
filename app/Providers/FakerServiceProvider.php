<?php

namespace App\Providers;

use Faker\Factory as FakerFactory;
use Faker\Provider\Fakecar;
use Illuminate\Support\ServiceProvider;

class FakerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(FakerFactory::class, function ($app) {
            $faker = FakerFactory::create();
            $newClass = new Fakecar($faker);

            $faker->addProvider($newClass);

            return $faker;
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
