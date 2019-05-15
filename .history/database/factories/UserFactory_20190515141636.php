<?php 
require_once '/path/to/Faker/src/autoload.php';

use Faker\Generator as Faker;


$factory->define(App\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name;
        'last_name' => $faker->lastName;
        'email' => $faker->email;
        'password' => $faker->password;
    ];
});