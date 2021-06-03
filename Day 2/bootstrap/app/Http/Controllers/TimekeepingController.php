<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimekeepingController extends Controller
{
    public function timekeeping()
    {
        return view('timekeeping');
    }

    public function timekeeping_create()
    {
        return view('create_form.timekeeping');
    }
}
