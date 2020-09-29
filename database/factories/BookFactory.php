<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use Faker\Generator as Faker;

$factory->define(Book::class, function (Faker $faker) {
    return [
        //
        'title' => $faker->title,
        'created_at' => $faker->dateTimeThisDecade('now', 'Europe/Amsterdam'),
        'updated_at' => $faker->dateTimeThisDecade('now', 'Europe/Amsterdam')
    ];
});
