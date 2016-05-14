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

$factory->define(Minotaur\Models\User::class, function (Faker\Generator $faker) {
    return [
        'firstname' => $faker->firstName,
        'lastname' => $faker->lastName,
        'username' => $faker->userName,
        'email' => $faker->safeEmail,
        'password' => bcrypt('Pass@word01'),
        'mobile' => $faker->phoneNumber,
        'gender' => 'M',
        'nationality' => $faker->country,
        'remember_token' => str_random(10),
    ];
});

$factory->define(Minotaur\Models\Profile::class, function (Faker\Generator $faker) {
    return [
        'user_id' => $faker->firstName,
        'status' => $faker->lastName,
        'native_language' => $faker->languageCode
    ];
});
