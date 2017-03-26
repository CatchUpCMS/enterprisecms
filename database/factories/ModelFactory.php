<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Modules\Core\Models\Staff::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'company_id' => 1,
        'first_name' => $faker->name,
        'last_name' => $faker->name,
    ];
});

$factory->define(Modules\Core\Models\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'company_id' => 1,
        'user_name' => $faker->name,
        'first_name' => $faker->name,
        'last_name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});


