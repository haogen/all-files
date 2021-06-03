<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = "products";

    protected $fillable= [
          'name',
          'price',
          'category',
          'description',
          'seller_name',
          'ratings',
          'deleted_at',
          'created_at',
          'updated_at'
    ];
}
