<?php

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Chat\Message::class, function (Faker\Generator $faker) {
    return [
      'body' => $faker->sentence(5),
      'user_id' => function () {
        return factory('App\User')->create()->id;
      }
    ];
});
