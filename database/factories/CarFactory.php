<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'Make' => $faker->randomElement($array=array('honda', 'toyota', 'ford')),
        'Year' => str_random(4),
        'Model' => str_random(2),
    ];
});
