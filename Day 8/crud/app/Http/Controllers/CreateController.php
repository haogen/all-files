<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personnel;

//facade
use Redirect;

class CreateController extends Controller
{
    //declare variable
    protected $request;

    //initiate class upon controller start    
    public function __construct(Request $request)
    {
        //make the request available on the class
        $this->request = $request;
    }

    public function create()
    {
        return view('create');
    }

    public function save()
    {
        $data = $this->request->except('_token');
        Personnel::create($data);

        return Redirect::route('home');
    }

}
