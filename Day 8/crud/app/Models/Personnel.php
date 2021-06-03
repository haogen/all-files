<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Personnel extends Model
{
    use HasFactory, SoftDeletes;

    //table name
    protected $table = "personnel";

    //fields
    protected $fillable= [
          'first_name',
          'last_name',
          'middle_name',
          'age',
          'gender',
          'birthday',
          'contact',
          'address',
          'deleted_at',
          'created_at',
          'updated_at'
    ];

}
