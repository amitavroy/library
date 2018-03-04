<?php

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

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => '$2y$10$TKh8H1.PfQx37YgCzwiKb.KjNyWgaHb9cbcoQgdIVFlYg7B77UdFm', // secret
        'remember_token' => str_random(10),
        'mobile_number' => random_int(1111111111, 9999999999),
        'date_of_birth' => $faker->date('Y-m-d'),
        'address' => $faker->address,
        'is_active' => 1,
    ];
});

$factory->state(\App\User::class, 'inactive', function (Faker $faker) {
    return [
        'is_active' => 0,
    ];
});
