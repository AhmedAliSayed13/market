<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\User;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(User::class, function (Faker $faker) {
    $item=$faker->unique()->numberBetween(1,47);
    return [
        'id' => $item,
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'image' => $item.'.jpg',
        'nid' => $faker->unique()->randomNumber(7),
        'email_verified_at' => now(),
        'password' => Hash::make('123456789'), // password
        'remember_token' => Str::random(10),
    ];
});
