<?php

use Faker\Generator as Faker;

$factory->define(App\Demand::class, function (Faker $faker) {
    return [
        'title' => $faker->realText($maxNbChars = 45, $indexSize = 2),
		'slug' => $faker->slug(),
		'content' => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
		'published_at' => $faker->dateTime($max = 'now', $timezone = null),
		'featured_image' => $faker->imageUrl($width = 100, $height = 100)
    ];
});
