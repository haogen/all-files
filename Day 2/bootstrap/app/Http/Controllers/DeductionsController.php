<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeductionsController extends Controller
{
    public function mandatory_deductions()
    {
        return view('mandatory_deductions');
    }

    public function mandatory_deductions_create()
    {
        return view('create_form.mandatory_deductions');
    }
}