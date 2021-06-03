<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function department()
    {
        return view('department');
    }

    public function department_create()
    {
        return view('create_form.department');
    }
}
