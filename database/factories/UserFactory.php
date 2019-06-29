<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;
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
    return [
        'name' => $faker->name,
        'username' => $faker->userName,
        'email' => $faker->unique()->safeEmail,
        'permission'=>$faker->randomElement($array = array ('1','1,2','2','2,3','3')),
        'email_verified_at' => now(),
        'password' => Hash::make('123456'), // password
        'user_type' =>$faker->randomElement($array = array ('1','2')),
        'remember_token' => Str::random(10),
    ];
});
