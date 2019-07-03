<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Team;
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

$factory->define(Team::class, function (Faker $faker) {
    return [
        'name' => $faker->jobTitle,
        'in_charge_user_id' => $faker->unique()->numberBetween($min = 1, $max = 50),
        'field' => 'testing', 
        'created_at' => now()
    ];
});
