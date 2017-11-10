<?php

use Faker\Generator as Faker;

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

$factory->define(Prueba\User::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(Prueba\Conductor::class, function (Faker $faker) {
    static $password;

    return [
        'nombres' => $faker->text(50),
        'apellidos' => $faker->text(50),
        'tipodedocumento' => $faker->text(50),
        'documento' => $faker->text(50),
        'fechadenacimiento' => $faker->text(50),
        'genero' => $faker->text(50),
    ];
});
