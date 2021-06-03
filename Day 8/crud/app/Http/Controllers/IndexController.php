<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personnel;

class IndexController extends Controller
{
    public function index()
    {
        return view('index')->with([
            'data' => Personnel::all()
        ]);
    }
}
