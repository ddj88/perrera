<?php

use Faker\Generator as Faker;
use App\Animal;

$factory->define(Animal::class, function (Faker $faker) {
    return [

        'name'=>$faker->word(),
        'description'=>$faker->sentence(15),
        'gender'=>$faker->randomElement($array = array ('macho', 'hembra')),
        'breed'=>$faker->word(2),
        'photo'=>$faker->imageUrl(250,250),
        'born'=>$faker->dateTimeThisDecade(),
        'entry'=>$faker->dateTimeThisDecade(),
        'type'=>$faker->randomElement($array=array('perro','gato'))


    ];
});
