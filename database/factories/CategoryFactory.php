<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;
use App\Book;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'name' =>$faker->name,
//        'effdata'=>$faker->dateTime,
//        'book_id'=> Book::all()->random()->id,
    ];
});
