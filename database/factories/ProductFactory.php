<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use App\Category;
use Faker\Generator as Faker;


$factory->define(Product::class, function (Faker $faker) {
    $categories = Category::all();
    $category = $categories->random();

    return [
        'name' => $faker->word,
        'description' => $faker->text(2048),
        'image_url' => $faker->imageUrl,
        'category_id' => $category->id,
        'created_at' => date('Y-m-d'),
        'updated_at' => date('Y-m-d')
    ];
});
