<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Burger extends Model
{
    protected $table = 'burger';
    protected $casts = [
        'toppings' => 'array',
    ];
}
