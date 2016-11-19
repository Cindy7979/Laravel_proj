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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
    ];
});

$factory->define(App\Content::class, function (Faker\Generator $faker) {

    return [
    	'content_type' => $faker->numberBetween(1, 5),
    	'category_type' => $faker->numberBetween(0, 5),
        'title' => $faker->word,
        'description' => $faker->paragraph,
        'img_src' => $faker->word,
        'img_src' => $faker->word,
        'created_at' => $faker->dateTimeBetween($startDate = '-2 years', $endDate = '-1 years'),
        'updated_at' => $faker->dateTimeBetween($startDate = '-2 years', $endDate = '-1 years'),
    ];
});

$factory->define(App\Comment::class, function (Faker\Generator $faker) {
    $min = App\Content::min('id');
    $max = App\Content::max('id');

    return [
    	'news_id' => $faker->numberBetween($min, $max),
        'comment' => $faker->paragraph,
        'created_at' => $faker->dateTimeBetween($startDate = '-2 years', $endDate = '-1 years'),
        'updated_at' => $faker->dateTimeBetween($startDate = '-2 years', $endDate = '-1 years'),
    ];
});