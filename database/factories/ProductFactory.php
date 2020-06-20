<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    $faker->addProvider(new \FakerRestaurant\Provider\fr_FR\Restaurant($faker));
    $faker->addProvider(new \Faker\Provider\Image($faker));
    $faker->addProvider(new \Faker\Provider\Base($faker));
    

    return [
        'sku' => $faker->ssn,
        'title' => $faker->vegetableName(),
        'description' => $faker->text,
        'price' => $faker->numberBetween($min = 1000, $max = 90000),
        'stock_quantity' => $faker->numberBetween($min = 10, $max = 900),
        'quantity_unit' => 'Kg',
        'category_id' => $faker->numberBetween($min = 1, $max = 5),
        'image' => $faker->imageUrl($width = 640, $height = 480, 'cats', true, 'Faker')
    ];
});
