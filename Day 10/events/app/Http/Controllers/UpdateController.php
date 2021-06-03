<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Redirect;

class UpdateController extends Controller
{
    protected $request;

     
    public function __construct(Request $request)
    {
        
        $this->request = $request;
    }

    public function index_update($id)
    {
        return view('update')->with([
            'data' => Event::find($id)
        ]);
    }

    public function save($id)
    {
        Event::find($id)->update(
            $this->request->except('_token')
        );

        return Redirect::route('home');
    }
}
