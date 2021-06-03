<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use Redirect;

class DeleteController extends Controller
{
    public function index_delete($id)
    {
        Event::find($id)->delete();

        return Redirect::route('home');
    }
}
