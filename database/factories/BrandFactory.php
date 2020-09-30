<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\Brand::class, function (Faker $faker) {
    $item=$faker->unique()->numberBetween(1,20);
    return [
        'id' => $item,
        'name' => $faker->unique()->word,
        'image' =>$item.".png",
        'about' => $faker->text
    ];
});
