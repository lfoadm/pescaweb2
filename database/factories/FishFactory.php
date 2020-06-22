<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Category;
use App\Model\Fish;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Support\Str;
use Ramsey\Uuid\Type\Decimal;

$factory->define(Fish::class, function (Faker $faker) {
    $title = $faker->sentence();
    $slug = Str::slug($title);
    
    return [
        'title' => $title,
        'slug'  => $slug,
        'body'  => $faker->text,
        'photo' => $slug,
        'status'=> number_format(2),
        'size'  => $faker->unique()->randomNumber(2),
        'category_id' => function(){
            return Category::all()->random();
        },
        'user_id' => function(){
            return User::all()->random();
        }
    ];
});
