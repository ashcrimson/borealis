<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Songs;
use App\Artists;
use Faker\Generator as Faker;

$factory->define(Songs::class, function (Faker $faker) {
    $nombre = $faker->randomElement([
        'Basket Case',
        'Live Forever',
        'Siva',
        'Lithium',
        'Freak'
    ]);

    return [
        'titulo' => $nombre,
        'duracion' => rand(5,10),
        'artist_id' => Artists::all()->random()->id,
    ];
});
