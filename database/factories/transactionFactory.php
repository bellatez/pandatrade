<?php

use Faker\Generator as Faker;

$factory->define(App\transaction::class, function (Faker $faker) {
    return [
        'date'=>$faker->date,
        'income'=> 14500,
        'expenditure'=> 1420,
        'user_id'=> 2
    ];
});
