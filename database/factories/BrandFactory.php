<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\Brand::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->word,
        'image' =>"brand.png",
        'about' => $faker->text
    ];
});
