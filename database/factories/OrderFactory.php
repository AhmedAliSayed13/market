<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(\App\Models\Order::class, function (Faker $faker) {
    return [
        'total_quantity' => $faker->randomNumber(1),
        'total_price' => $faker->randomNumber(2),
        'name' => $faker->word,
        'address' => $faker->address,
        'governorate' => $faker->word,
        'district' => $faker->word,
        'phone' => $faker->phoneNumber,
        'email' => $faker->email,
        'nid' => $faker->phoneNumber,
        'payment_id' => $faker->uuid,
        'payed_date' => $faker->date($format = 'Y-m-d'),
        'delivery_date' => $faker->date($format = 'Y-m-d'),
        'payed' => 1,
        'user_id' =>  $faker->numberBetween(1,24),
        'shipping_id' => $faker->numberBetween(1,3),
        'voucher_id' => $faker->numberBetween(1,24),
    ];
});
