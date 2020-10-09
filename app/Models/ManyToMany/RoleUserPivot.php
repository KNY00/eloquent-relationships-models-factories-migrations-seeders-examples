<?php

namespace App\Models\ManyToMany;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;

class RoleUserPivot extends Pivot
{
    use HasFactory;

    public $incrementing = true;

    protected $table = 'role_user';
}
