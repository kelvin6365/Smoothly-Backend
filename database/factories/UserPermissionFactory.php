<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\UserPermission;
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

$factory->define(UserPermission::class, function (Faker $faker) {
    return [
        'permission_id' => $faker->randomElement($array = array ('1','2','3')),
        'user_id' => $faker->unique()->numberBetween(1,50)
    ];
});