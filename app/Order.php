<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  protected $dates = [
    'updated_at',
    'created_at',

  ];

  protected $fillable = [
    'product_id',
    'user_id',
    'category_id',
    'name',
    'price',
  ];
}
