<?php
//
///*
//|--------------------------------------------------------------------------
//| Model Factories
//|--------------------------------------------------------------------------
//|
//| Here you may define all of your model factories. Model factories give
//| you a convenient way to create models for testing and seeding your
//| database. Just tell the factory how a default model should look.
//|
//*/

$factory->define(\Akela\Models\User::class, function (Faker\Generator $faker) {
    return [
        'counsellor_id' => function () {
            return factory(\Akela\Models\Counsellor::class)->create()->id;
        },
        'type'      => 'user',
        'firstname' => $faker->firstName,
        'lastname' => $faker->lastName,
        'username' => $faker->userName,
        'email' => $faker->unique()->safeEmail,
        'password' => bcrypt('Pass@word01'),
        'mobile' => $faker->phoneNumber,
        'gender' => 'M',
        'nationality' => $faker->country,
        'birth_country' => $faker->country,
        'birth_city' => $faker->city,
        'dob' => $faker->unique()->dateTimeBetween($startDate = "1970-01-01", $endDate = "1995-12-31")->format('Y-m-d'), //$faker->date('1970-01-01', '1995'),
        'remember_token' => str_random(10),
    ];
});

//$factory->define(App\Post::class, function ($faker) {
//    return [
//        'title' => $faker->title,
//        'content' => $faker->paragraph,
//        'user_id' => function () {
//            return factory(App\User::class)->create()->id;
//        },
//        'user_type' => function (array $post) {
//            return App\User::find($post['user_id'])->type;
//        }
//    ];
//});

$factory->define(Akela\Models\Profile::class, function (Faker\Generator $faker) {
    return [
        'user_id' => $faker->firstName,
        'status' => $faker->lastName,
        'native_language' => $faker->languageCode
    ];
});

$factory->define(Akela\Models\Counsellor::class, function (Faker\Generator $faker) {
    return [
        'firstname' => $faker->firstName,
        'lastname' => $faker->lastName,
        'email' => $faker->safeEmail,
        'password' => bcrypt('Pass@word01'),
        'mobile' => $faker->phoneNumber,
        'active' => $faker->boolean(100),
        'remember_token' => str_random(10),
    ];
});

$factory->define(Akela\Models\Passport::class, function (Faker\Generator $faker) {
    return [
        'passport_number' => $faker->numerify(),
        'passport_issue_date' => $faker->dateTimeBetween('-5 years','now'),
        'passport_expiry_date' => $faker->dateTimeBetween('+5 years','+10 years'),
        'passport_issuing_authority' => 'Some Embassy',
    ];
});

$factory->define(Akela\Models\Office::class, function (Faker\Generator $faker) {
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

