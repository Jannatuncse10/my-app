<?php


/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Product::class, function (Faker\Generator $faker) {
	return [
		'title' => $faker->sentence(3),
		'description' => $faker->paragraph(5),
		'img' => $faker->imageUrl(500, 200, 'fashion'),
		'stock' => $faker->numberBetween(5, 20),
		'status' => true
	];
});
