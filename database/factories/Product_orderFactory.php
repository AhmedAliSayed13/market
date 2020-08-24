<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\Order_product::class, function (Faker $faker) {
    return [
        'order_id' => $faker->numberBetween(1,100),
        'product_id' => $faker->numberBetween(1,100),
        'quantity' => $faker->randomNumber(2),
        'price' => $faker->randomNumber(2),

    ];
});
