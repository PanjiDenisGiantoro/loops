<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comments;
use Faker\Generator as Faker;

$factory->define(Comments::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'website'      => $faker->text,
        'comment'      => $faker->paragraph,
        'post_id'      => $faker->numberBetween($min=1,$max=10)

    ];
});
