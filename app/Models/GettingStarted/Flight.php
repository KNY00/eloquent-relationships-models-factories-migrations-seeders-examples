<?php

namespace App\Models\GettingStarted;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'destination_id', 'arrived_at'];
}
