<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'body'=>$faker->paragraph,
        'title'=>$faker->sentence,
        'user_id'=> function(){
          return factory(App\User::class)->create()->id;
        }
    ];
});
