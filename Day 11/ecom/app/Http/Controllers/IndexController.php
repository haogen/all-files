<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Carbon\Carbon;

class IndexController extends Controller
{
    protected $request; 

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function index()
    {
        $data = Product::all();

        if($this->request->has('search')){
            $data = Product::where(
                $this->request->by,
                'LIKE',
                '%'.$this->request->search.'%'
            )->get();
        }

        if($this->request->has('price1')){
            $data = Product::whereBetween('price',[
            $this->request->price1,
            $this->request->price2
            ])->get();
        }

        if($this->request->has('rating1')){
            $data = Product::where('ratings','>=',$this->request->rating1)
                        ->where('ratings','<=',$this->request->rating2)
                        ->get();
        }


        return view('index')->with([
            'data' => $data
        ]);
    }
}
