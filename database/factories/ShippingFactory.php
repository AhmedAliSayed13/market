<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\Shipping::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->name,
        'cost' => $faker->unique()->numberBetween(1,10),
        'time' => $faker->unique()->numberBetween(1,6),
    ];
});
