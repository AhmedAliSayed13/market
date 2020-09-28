<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\Productimage::class, function (Faker $faker) {
    $item=$faker->unique()->numberBetween(1,100);
    return [
        'id' => $item,
        'image' => $item.'.png',
        'product_id' => $item,
    ];
});
