<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{


  protected $dates = [
    'updated_at',
    'created_at',

  ];

  protected $fillable = [
    'name',
    'slug',
    'category_id',
    'description',
    'image',
    'price',
    'weight'
  ];
}
