<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = "orders";

    protected $fillable= [
          'customers_id',
          'total',
          'category',
          'promo',
          'status',
          'order_date',
          'created_at',
          'updated_at'
    ];
}
