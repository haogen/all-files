<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Redirect;

class CreateController extends Controller
{
    protected $request; 

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function create()
    {
        return view('create');
    }

    public function save()
    {
        $data = $this->request->except('_token');
        Event::create($data);

        return Redirect::route('home');
    }
}
