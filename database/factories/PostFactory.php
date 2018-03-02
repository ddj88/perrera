<?php

use Faker\Generator as Faker;
use App\Post;

$factory->define(Post::class, function (Faker $faker) {
    return [



        'title'=>$faker->word(2),
        'description'=>$faker->sentence(15),
        'photo'=>$faker->imageUrl(250,250),
        'published'=>$faker->dateTimeThisDecade(),


    ];
});
