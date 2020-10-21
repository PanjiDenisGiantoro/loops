<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Posts;
use Faker\Generator as Faker;

$factory->define(Posts::class, function (Faker $faker) {
    return [
        'slug'         => $faker->slug,
        'title'        => $faker->text,
        'content'      => $faker->paragraph,
        'user_id'      => $faker->numberBetween($min=1,$max=10)

    ];
});
