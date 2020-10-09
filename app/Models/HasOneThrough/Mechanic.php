<?php

namespace App\Models\HasOneThrough;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mechanic extends Model
{
    use HasFactory;

    public function carOwner()
    {
        return $this->hasOneThrough(
            'App\Models\HasOneThrough\Owner',
            'App\Models\HasOneThrough\Car'
        );
    }
}
