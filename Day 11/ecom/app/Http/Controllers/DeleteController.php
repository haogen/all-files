<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Redirect;

class DeleteController extends Controller
{
    public function index_delete($id)
    {
        Product::find($id)->delete();

        return Redirect::route('home');
    }
}
