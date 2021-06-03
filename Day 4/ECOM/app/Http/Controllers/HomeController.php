<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function products()
    {
        return view('products');
    }

    public function categories()
    {
        return view('categories');
    }
    public function orders()
    {
        return view('orders');
    }
    public function customers()
    {
        return view('customers');
    }
    
    public function products_create()
    {
        return view('create_form.products_c');
    }

    public function categories_create()
    {
        return view('create_form.categories_c');
    }

    public function orders_create()
    {
        return view('create_form.orders_c');
    }

    public function customers_create()
    {
        return view('create_form.customers_c');
    }
}
