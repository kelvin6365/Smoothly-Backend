<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\UserDetail;
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

$factory->define(UserDetail::class, function (Faker $faker) {
    return [
        'job_title' => $faker->jobTitle,
        'location' => $faker->country,
        'user_id' => $faker->unique()->numberBetween(1,  50),
        'team_id' => $faker->numberBetween($min = 1, $max = 10),
        'created_at' => now()
    ];
});
