<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Product_attribute;
use Faker\Generator as Faker;

$factory->define(Product_attribute::class, function (Faker $faker) {
    return [
        'value' => $faker->randomNumber(),
        'attribute_id' => 6,
        'product_id' => $faker->unique()->numberBetween(1,100)
    ];
});
