<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        'client_id' => App\Client::all()->random()->id,
        'item_id'   => App\Item::all()->random()->id,
        'date'      => $faker->datetime
    ];
});
