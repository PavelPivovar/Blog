<?php

use Faker\Generator as Faker;

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'title' => $faker->text(10),
        'body' => $faker->paragraphs,
    ];
});
$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->text(20),
        'body' => $faker->text(100),
    ];
});
