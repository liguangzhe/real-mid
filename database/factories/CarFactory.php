<?php

use Faker\Generator as Faker;

$factory->define(App\Car::class, function (Faker $faker) {
    return [
        'Make' => $faker->randomElement($array=array('honda', 'toyota', 'ford')),
        'Year' => $faker->numberBetween(2000,2018),
        'Model' => str_random(2),
    ];
});
