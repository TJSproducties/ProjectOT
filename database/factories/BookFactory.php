<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use Faker\Generator as Faker;
use App\Category;

$factory->define(Book::class, function (Faker $faker) {
    return [
        //
        'title' => $faker->title,
        '`category_id'
    ];
});
