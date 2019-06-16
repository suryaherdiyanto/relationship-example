<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Profile;
use Faker\Generator as Faker;

$factory->define(Profile::class, function (Faker $faker) {
    return [
        'fullname'  => $faker->name,
        'phone' => $faker->phoneNumber,
        'age'   => $faker->numberBetween(19, 50),
        'address'   => $faker->address,
        'client_id' => function() {
            return factory(App\Client::class)->create()->id;
        }
    ];
});
