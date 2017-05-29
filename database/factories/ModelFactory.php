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

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
        'avatar_path'=>"{{asset('img').'/user.png'}}",
    ];
});

$factory->define(App\Item::class, function(Faker\Generator $faker){
	return [
		'title'=>$faker->name,
		'price'=>rand(10, 500),
		'availability'=>'in stock',
		'description'=>$faker->text($maxNbChars = 200),
		'image_path'=>'img/lampochka.jpg',
	];
});

$factory->define(App\Comment::class, function(Faker\Generator $faker){
	return [
		'content'=>$faker->text($maxNbChars = 200),
		'user_id'=>rand(1, 10),
		'item_id'=>rand(1, 10),
	];
});

$factory->define(App\Tag::class, function(Faker\Generator $faker){
	return [
		'title'=>$faker->name,
	];
});
