<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personnel;

class PersonnelController extends Controller
{
    public function show_all()
    {
        $data = Personnel::all();

        return response()->json($data, 200, [], JSON_PRETTY_PRINT);
    }

    public function avg_personnel()
    {
        $data = Personnel::avg('age');

        return response()->json($data, 200, [], JSON_PRETTY_PRINT);
    }

    public function find_personnel()
    {
        $data = Personnel::find(8);

        return response()->json($data, 200, [], JSON_PRETTY_PRINT);
    }

    public function count_personnel()
    {
        $data = Personnel::count();

        return response()->json($data, 200, [], JSON_PRETTY_PRINT);
    }

    public function select_personnel()
    {
        $data = Personnel::select('last_name')
                            ->get();

        return response()->json($data, 200, [], JSON_PRETTY_PRINT);
    }

    public function show_age()
    {
        $data = Personnel::where('age','<',25)->get();

        return response()->json($data, 200, [], JSON_PRETTY_PRINT);
    }

    public function avg_age()
    {
        $data = Personnel::where('age','<',30)->avg('age');

        return response()->json($data, 200, [], JSON_PRETTY_PRINT);
    }

    public function show_id()
    {
        $data = Personnel::select('last_name')->where('id','>','10')->get();

        return response()->json($data, 200, [], JSON_PRETTY_PRINT);
    }
}