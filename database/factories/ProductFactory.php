<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    $faker->addProvider(new \FakerRestaurant\Provider\fr_FR\Restaurant($faker));
    $faker->addProvider(new \Faker\Provider\Image($faker));
    $faker->addProvider(new \Faker\Provider\Base($faker));
    
    $images = [
        'https://www.scidev.net/objects_store/thumbnail/91A50A6A64D9842F4F4059160388CB72.jpg',
        'https://ivoiremedplus.net/wp-content/uploads/2020/02/Ignames.jpg',
        'https://www.finedininglovers.fr/sites/g/files/xknfdk1291/files/original_comment-cuisiner-igname_0.jpg',
        'https://www.easymarket.pf/wp-content/uploads/2017/11/EM-Image-blog--730x330.jpg',
        'https://www.easymarket.pf/wp-content/uploads/2017/11/EM-Image-blog-.jpg',
        'https://img-3.journaldesfemmes.fr/qxnJGbDi6-DAHLFJNgCnAxfJ4Hg=/910x607/smart/537462875105486da7cd49bb69e7116d/ccmcms-jdf/10661604.jpg',
        'https://www.mediaterre.org/users/pexineg/images/mais01.jpg',
        'https://images.unsplash.com/photo-1518977822534-7049a61ee0c2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80',
        'https://www.thermofisher.com/blog/wp-content/uploads/2014/08/tomatoes.jpg',
        'https://img-3.journaldesfemmes.fr/4PYoBAo1J5rsDbuMiSTNRGolvhc=/910x607/smart/3b81125b1cbd46f7af87766bb8430152/ccmcms-jdf/10659145.jpg'
    ];

    return [
        'sku' => $faker->ssn,
        'title' => $faker->vegetableName(),
        'description' => $faker->text,
        'price' => $faker->numberBetween($min = 1000, $max = 90000),
        'stock_quantity' => $faker->numberBetween($min = 10, $max = 900),
        'quantity_unit' => 'Kg',
        'category_id' => $faker->numberBetween($min = 1, $max = 5),
        'image' => ''
        // 'image' => $faker->imageUrl($width = 640, $height = 480, 'cats', true, 'Faker')
    ];
});
