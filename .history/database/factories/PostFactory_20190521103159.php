<?php 
use Faker\Generator as Faker;

function setTitle($nbWords = 5)
{
  $sentence = $this->generator->sentence($nbWords);
  return substr($sentence, 0, strlen($sentence) - 1);
}

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'author' => $faker->email,
        'content' => $faker->realText($maxNbChars = 200),
        'image' => $faker->imageUrl($width = 640, $height = 480, 'food'),
        'rank' => str_random(3),
        'category' => $faker->email,
        'created_at' => $faker->dateTime(),
        'updated_at' => $faker->dateTime(),
    ];
});