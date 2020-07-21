<?php

use Carbon\Carbon;
use Faker\Generator as Faker;
use Illuminate\Support\Str;



$factory->define(App\Order::class, function (Faker $faker) {
  return  [
    'product_id' => $faker->numberBetween(1,2500),
    'user_id' => $faker->numberBetween(1,10),
    'name' => $faker->sentence(1),
    'category_id' =>$faker->numberBetween(1,250),
    'price' =>$faker->numberBetween(49,20000),
    'order_at'     => Carbon::now()->format('d-m-Y'),
    'created_at'     => Carbon::now(),
    'updated_at'     => Carbon::now(),
  ];
});
