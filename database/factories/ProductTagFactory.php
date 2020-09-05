<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\Proudcttag::class, function (Faker $faker) {
    return [
        'product_id' => $faker->numberBetween(1,100),
        'tag_id' => $faker->numberBetween(1,10),
    ];
});
