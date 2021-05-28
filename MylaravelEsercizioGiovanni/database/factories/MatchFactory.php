<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Match;
use Faker\Generator as Faker;

$factory->define(Match::class, function (Faker $faker) {
    return [
      'team1' => $faker -> word,
      'team2' => $faker -> word,
      'point1' => $faker -> numberBetween(30, 90 ),
      'point2' => $faker ->  numberBetween(30, 90 ),
      'result' => $faker ->  numberBetween(0, 1 ),
    ];
});
