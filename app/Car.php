<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'Make', 'Model', 'Year',
    ];

    protected $casts = [
        'year' => 'integer'
    ];
}
