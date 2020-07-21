<?php


use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
  public function run()
  {
      factory(App\Product::class, 100000)->create();
  }
}
