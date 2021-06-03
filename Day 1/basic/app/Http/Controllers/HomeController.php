<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function gallery()
    {
        return view('gallery');
    }

    public function profileanthony()
    {
        return view('profileanthony');
    }

    public function profilealbert()
    {
        return view('profilealbert');
    }

    public function services()
    {
        return view('services');
    }

    public function password()
    {
        return view('password');
    }

    public function searchproduct()
    {
        return view('searchproduct');
    }

    public function products()
    {
        return view('products');
    }

    public function members()
    {
        return view('members');
    }

    public function printer()
    {
        return view('printer');
    }

    public function order_checkout()
    {
        return view('order_checkout');
    }

    public function fbaccounts()
    {
        return view('fbaccounts');
    }
}
