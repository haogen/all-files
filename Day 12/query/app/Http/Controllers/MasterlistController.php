<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Masterlist;

class MasterlistController extends Controller
{
    public function simple_query()
    {
        $data = Masterlist::all();

        return dd($data);
    }

    public function select()
    {
        $data = Masterlist::select('name','age')
                            ->get();

        return dd($data);
    }

    public function find()
    {
        $data = Masterlist::find(4);

        return dd($data);
    }

    public function count()
    {
        $data = Masterlist::whereStatus('regular')
                            ->count();

        return dd($data);
    }

    public function avg()
    {
        $data = Masterlist::avg('age');

        return dd($data);
    }

    public function exists()
    {
        $data = Masterlist::whereName('Delaila Cruz')->exists();
        //$data = Masterlist::whereAge(8)->whereGender('female')->exists();

        return dd($data);
    }

    public function where()
    {
        $data = Masterlist::select('name', 'gender', 'age')
                            ->where('name','LIKE','%Zackary%')
                            ->where('gender','=','male')
                            ->where('age','!=', 8)
                            ->get();

        // $data = Masterlist::select('name', 'gender', 'age')->whereGender('male')->where('age','!=', 8)->get();

       // return dd($data);
        return response()->json($data, 200, [], JSON_PRETTY_PRINT);
    }

    public function orwhere()
    {
        $data = Masterlist::select('name', 'gender', 'age')
                            ->where('age','=', 50)
                            ->orWhere('age','=', 10)
                            ->get();

        return response()->json($data, 200, [], JSON_PRETTY_PRINT);
    }

    public function wherebetween()
    {
        $data = Masterlist::select('name', 'birthday', 'age')
                            // ->whereBetween('birthday', [
                            //     '2014-01-01', '2015-01-01'
                            // ])
                            ->whereBetween('age', [
                                '6', '8'
                            ])
                            ->get();

        return response()->json($data, 200, [], JSON_PRETTY_PRINT);
    }

    public function wherein()
    {
        $data = Masterlist::select('name', 'gender', 'age')
                            ->whereIn('age', ['6', '8', '9'])
                            ->get();

        return response()->json($data, 200, [], JSON_PRETTY_PRINT);
    }

    public function wherenull()
    {
        $data = Masterlist::select('name', 'gender', 'age')
                            ->whereNull('created_at')
                            ->get();

        return response()->json($data, 200, [], JSON_PRETTY_PRINT);
    }
}
