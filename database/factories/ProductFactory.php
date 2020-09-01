<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->sentence($nbWords = 4, $variableNbWords = true),
        'price' => $faker->randomNumber(2),
        'amount' => $faker->randomNumber(),
        'sale_count' => $faker->randomNumber(),
        'discount' => $faker->randomNumber(),
        'available' => 1,
        'brand_id' => $faker->numberBetween(1,20),
        'category_id' => $faker->numberBetween(1,10),
        'describe' => $faker->text,

    ];
});
