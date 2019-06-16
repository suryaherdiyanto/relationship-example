<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Item;
use Faker\Generator as Faker;

$factory->define(Item::class, function (Faker $faker) {
    return [
        'name'  => $faker->word,
        'price' => $faker->numberBetween(100000, 10000000),
        'description' => $faker->paragraph,
        'supplier_id'   => function() {
            return App\Supplier::all()->random()->id;
        }
    ];
});
