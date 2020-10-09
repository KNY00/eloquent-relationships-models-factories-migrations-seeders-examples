<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class FakerFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'Faker\Factory';
    }
}
