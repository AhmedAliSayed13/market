<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\Productimage::class, function (Faker $faker) {
    return [
        'image' => 'product.png',
        'product_id' => $faker->unique()->numberBetween(1,100),

    ];
});
