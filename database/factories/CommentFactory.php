<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\Comment::class, function (Faker $faker) {
    return [
        'commentable_id' => $faker->unique()->numberBetween(1,100),
        'commentable_type' => 'App\Models\Product',
        'commented_id' => $faker->numberBetween(1,24),
        'commented_type' => 'App\Models\User',
        'comment' => $faker->text,
        'approved' => 1,
        'rate' => $faker->numberBetween(1,5),
        'created_at' => \Carbon\Carbon::now(),
        'updated_at' => \Carbon\Carbon::now(),
    ];
});
