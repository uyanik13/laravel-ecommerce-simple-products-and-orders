<?php

use Carbon\Carbon;
use Faker\Generator as Faker;
use Illuminate\Support\Str;



$factory->define(App\Product::class, function (Faker $faker) {
  return  [
    'name' => $faker->sentence(1),
    'slug' => $faker->sentence(1),
    'category_id' => $faker->numberBetween(1,10),
    'image' =>$faker->randomNumber(2),
    'price' =>$faker->randomNumber(2),
    'weight' => $faker->numberBetween(1,10),
    'created_at'     => Carbon::now(),
    'updated_at'     => Carbon::now(),
  ];
});
