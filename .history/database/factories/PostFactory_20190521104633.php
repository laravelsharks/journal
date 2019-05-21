<?php 
use Faker\Generator as Faker;


$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence($nbWords = 5, $variableNbWords = true),
        'content' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'author' => $faker->email,
        'image' => $faker->imageUrl($width = 640, $height = 480, 'food'),
        'rank' => str_random(3),
        'category' => $faker->email,
        'created_at' => $faker->dateTime(),
        'updated_at' => $faker->dateTime(),
    ];
});