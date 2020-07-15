<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Setting;
use Faker\Generator as Faker;


    $factory->define(Setting::class, function (Faker $faker) {
        return [
            'name' => $faker->name,
            'email' => $faker->email,
            'phone' => $faker->phoneNumber,
            'logo' => 'logo.png',
            'icon' => 'icon.png',
            'facebook' => $faker->url,
            'instgram' => $faker->url,
            'twitter' => $faker->url,
            'about' => $faker->text($maxNbChars = 200),


        ];
});

