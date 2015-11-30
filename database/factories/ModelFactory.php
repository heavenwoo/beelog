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
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'role_id' => rand(1, 3),
        'gender' => rand(0, 1),
        'birthday' => $faker->dateTimeBetween('-40 year', '-10 year'),
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Article::class, function (Faker\Generator $faker) {
    return [
        'category_id' => rand(1, 6),
        'subject' => $faker->sentence(mt_rand(3, 5)),
        'published' => $faker->randomElement(['published', 'edit', 'ban']),
        'intro' => join("\n\n", $faker->paragraphs(mt_rand(1, 1))),
        'author' => $faker->userName,
        'keyword' => $faker->words(3, true),
        'tags' => $faker->words(4, true),
        'ip' => $faker->ipv4,
        'user_id' => rand(1, 10),
        'content' => join("\n\n", $faker->paragraphs(mt_rand(6, 8))),
        'hit' => rand(0, 10),
        'picture_url' => $faker->imageUrl(500, 300),
    ];
});

$factory->define(App\Comment::class, function (Faker\Generator $faker) {
    return [
        'article_id' => rand(1, 100),
        'user_id' => rand(1, 10),
        'comment' => join("\n\n", $faker->paragraphs(mt_rand(1, 3))),
        'email' => $faker->email,
        'published' => $faker->randomElement(['published', 'edit', 'ban']),
    ];
});

$factory->define(App\Category::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->word,
    ];
});
