<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Submission;
use Faker\Generator as Faker;

$factory->define(Submission::class, function (Faker $faker) {
    return [
        'title' => $faker->title,
        'first_name' => $faker->firstName,
        'last_name'=>$faker->lastName,
        'paper'=>$faker->url,
        'isReviewed' =>$faker->boolean,
    ];
});
