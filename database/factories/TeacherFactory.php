<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\User;

use App\Teacher;
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

//$user = User::where('rol', User::USER_TEACHER )->inRandomOrder()->first();

$factory->define(Teacher::class, function (Faker $faker) {

    $user = User::where('rol', User::USER_TEACHER )->inRandomOrder()->first();

    return [
        'titulo' => $faker->randomElement(['licenciado', 'Ingeniero', 'estudiante', 'profesor']),
        'descripcion' => $faker->paragraph(1),
        'zona' => $faker->randomElement(['recoleta', 'palermo', 'microcentro', 'almagro', 'retiro']),
        'user_id' => $user->id,
    ];
});