<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function employees()
    {
        return view('employees');
    }

    public function employees_create()
    {
        return view('create_form.employees');
    }
    
}
