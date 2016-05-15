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
        'dob' => $faker->date('Y-m-d','1995'),
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

$factory->define(Minotaur\Models\Counsellor::class, function (Faker\Generator $faker) {
    return [
        'firstname' => $faker->firstName,
        'lastname' => $faker->lastName,
        'email' => $faker->safeEmail,
        'password' => bcrypt('Pass@word01'),
        'mobile' => $faker->phoneNumber,
        'active' => 1,
        'remember_token' => str_random(10),
    ];
});

$factory->define(Minotaur\Models\Passport::class, function (Faker\Generator $faker) {
    return [
        'passport_number' => $faker->numerify(),
        'passport_issue_date' => $faker->dateTimeBetween('-5 years','now'),
        'passport_expiry_date' => $faker->dateTimeBetween('+5 years','+10 years'),
        'passport_issuing_authority' => 'Some Embassy',
    ];
});

$factory->define(Minotaur\Models\Office::class, function (Faker\Generator $faker) {
    return [
        'passport_number' => $faker->numerify(),
        'passport_issue_date' => $faker->dateTimeBetween('-5 years','now'),
        'passport_expiry_date' => $faker->dateTimeBetween('+5 years','+10 years'),
        'passport_issuing_authority' => 'Some Embassy',
        'address_line1' => $faker->address,
        'phone' => $faker->phoneNumber,
        'city' => $faker->city,
        'country' => $faker->country,
        'postcode' => $faker->postcode,
    ];
});