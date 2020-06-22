<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Comment;
use App\Model\Fish;
use App\User;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'body'  => $faker->text,
        'fish_id' => function(){
            return Fish::all()->random();
        },
        'user_id' => function(){
            return User::all()->random();
        },
    ];
});
