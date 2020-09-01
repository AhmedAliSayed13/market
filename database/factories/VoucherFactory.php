<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(\App\Models\Voucher::class, function (Faker $faker) {
    return [
        'code' => $faker->unique()->postcode,
        'name' => $faker->unique()->word,
        'product_id' => $faker->unique()->numberBetween(1,100),
        'active' => $faker->numberBetween(0,1),
        'discount' => $faker->numberBetween(1,80),
        'max_used' => 100,
        'count_used' => $faker->numberBetween(1,100),
        'starts_at' => Carbon::now()->format('Y-m-d'),
        'expires_at' => Carbon::now()->addWeeks(2)->format('Y-m-d'),
        'description' => $faker->text,
    ];
});
