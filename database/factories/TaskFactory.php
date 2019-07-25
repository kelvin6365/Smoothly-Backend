<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Task;
use Faker\Generator as Faker;

$factory->define(Task::class, function (Faker $faker) {
    return [
        'sprint_id' => "1",
        'name' => $faker->userName,
        'description' => $faker->word,
        'hold_by' => $faker->unique()->numberBetween($min = 1, $max = 50),
        'handle_by' => $faker->numberBetween($min = 25, $max = 50),
        'tasktype_id' => $faker->numberBetween($min = 1, $max = 3),
        'taskstate_id' => $faker->numberBetween($min = 1, $max = 3),
        'tasktag_id' => $faker->numberBetween($min = 1, $max = 3),
        'order_id' => $faker->numberBetween($min = 1, $max = 3),
        'created_at' => now()
    ];
});
