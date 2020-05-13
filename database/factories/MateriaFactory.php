<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;

use App\Materia;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Materia::class, function (Faker $faker) {
    return [
        'nombre' => $faker->randomElement(['matematica','lengua','fisica','quimica']),
        'nivel' => $faker->randomElement(['primario','secundario','cbc','universitario']),
        'precio' => $faker->numberBetween(100, 400),
    ];
});