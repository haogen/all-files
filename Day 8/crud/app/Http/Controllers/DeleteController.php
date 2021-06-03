<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personnel;
use Redirect;

class DeleteController extends Controller
{
    public function index_delete($id)
    {
        Personnel::find($id)->delete();

        return Redirect::route('home');
    }
}
