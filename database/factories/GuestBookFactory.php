<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Guest;
use Faker\Generator as Faker;

$factory->define(Guest::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'presence' => 1,
        'person' => 2,
        'comment' => $faker->paragraph(5), // password
    ];
});
