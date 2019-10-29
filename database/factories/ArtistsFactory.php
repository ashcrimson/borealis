<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Artists;
use Faker\Generator as Faker;

$factory->define(Artists::class, function (Faker $faker) {
    $nombre = $faker->randomElement([
        'Greenday',
        'Oasis',
        'Smashing Pumpkins',
        'Nirvana',
        'Silverchair'
    ]);

 
    return [
        'nombre' => $nombre
    ];
});
