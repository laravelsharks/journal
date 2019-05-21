<?php 
use Faker\Generator as Faker;




$factory->define(App\Post::class, function (Faker $faker) {

    $ranCat = $faker->randomElement($array = array('Sports', 'Economy', 'World', 'Technology', 'Weather'));
    return [
        'title' => $faker->sentence($nbWords = 5, $variableNbWords = true),
        'content' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
        'author' => $faker->email,
        'image' => $faker->imageUrl($width = 640, $height = 480, $ranCat),
        'rank' => $faker->numberBetween($min = 1, $max = 3),
        'category' => $faker->randomElement($array = array('Sports', 'Fashion', 'Politics', 'Technology', 'Weather')),
        'created_at' => $faker->dateTime(),
        'updated_at' => $faker->dateTime(),
    ];
});