<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'cat_id' => App\Category::all()->random()->id,
        'user_id' => App\User::all()->random()->id,
        'comment_id' => App\User::all()->random()->id,
        'title' => $faker->name,
        'des' => $faker->paragraph,
        'photo' => $faker->imageUrl,
    ];
});
