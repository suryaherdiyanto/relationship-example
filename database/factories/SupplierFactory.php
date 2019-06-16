<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Supplier;
use Faker\Generator as Faker;

$factory->define(Supplier::class, function (Faker $faker) {
    return [
        'name'  => $faker->company,
        'phone' => $faker->phoneNumber,
        'fax'   => $faker->randomNumber(6),
        'address'   => $faker->address
    ];
});
