<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Statistic;

class StatisticsController extends Controller
{
    public function sum_statistics()
    {
        $data = Statistic::sum('weight');

        return response()->json($data, 200, [], JSON_PRETTY_PRINT);
    }

    public function count_height()
    {
        $data = Statistic::join('personnel','personnel.id','statistics.personnel_id')
                        ->where('height','<',165.00)
                        ->count();

        return response()->json($data, 200, [], JSON_PRETTY_PRINT);
    }

    public function sum_weight()
    {
        $data = Statistic::where('height','>',165.00)->sum('weight');

        return response()->json($data, 200, [], JSON_PRETTY_PRINT);
    }
}
