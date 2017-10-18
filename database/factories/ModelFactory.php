<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/


$factory->define(App\Car::class, function (Faker\Generator $faker) {

    return [
        'models' => 'default',
        'year' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'color' => $faker->colorName,
        'owner_id' => random_int(1, 10),
    ];
});

$factory->define(App\Owner::class, function (Faker\Generator $faker) {

    return [
        'name' => $faker->name,
    ];
});