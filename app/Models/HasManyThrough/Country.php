<?php

namespace App\Models\HasManyThrough;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    public function posts()
    {
        return $this->hasManyThrough(
            'App\Models\HasManyThrough\Post',
            'App\Models\HasManyThrough\User'
            );
    }

    /**
     * function used by the factory
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users() {
        return $this->hasMany('App\Models\HasManyThrough\user');
    }
}
