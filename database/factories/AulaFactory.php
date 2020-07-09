<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Aula;
use Faker\Generator as Faker;

$factory->define(Aula::class, function (Faker $faker) {
    return [
        'capacidad' => 20,
        'piso' => 3,
        'escuela' => 'Pruebas'
    ];
});
