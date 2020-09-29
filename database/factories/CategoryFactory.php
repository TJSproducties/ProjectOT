<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;
use App\Book;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'price'=>$faker->randomFloat(2,2,6),
        'effdata'=>$faker->dateTime,
        'book_id'=> Book::all()->random()->id,
    ];
});
