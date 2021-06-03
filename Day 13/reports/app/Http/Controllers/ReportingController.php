<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Order;
use Carbon\Carbon;

class ReportingController extends Controller
{

    protected $request;
  
    public function __construct(Request $request)
    {
        
        $this->request = $request;
    }

    public function index()
    {
        return view('index')->with([
            'total_number_of_customers' => Customer::count(),
            'total_number_of_customers_using_mobile' => Customer::whereDevice('app')->count(),
            'total_number_of_customers_using_browser' => Customer::whereDevice('browser')->count(),
            'female_customers' => Customer::whereGender('female')->count(),
            'male_customers' => Customer::whereGender('male')->count(),
            'age' => [
                'child' => Customer::whereBetween('age', [0,12])->count(),
                'adolescence' => Customer::whereBetween('age', [13,18])->count(),
                'adult' => Customer::whereBetween('age', [19,59])->count(),
                'senioradult' => Customer::where('age','>=', 60)->count(),
            ],
            
            'country' => [
                'asia' => Customer::where('country','=', 'ASIA')->count(),
                'europe' => Customer::where('country', '=', 'EUROPE')->count(),
                'us' => Customer::where('country', '=', 'US')->count(),
                'australia' => Customer::where('country', '=', 'AUSTRALIA')->count(),
            ]
        ]);
    }

    public function orders()
    {
        $data = [
            'total_earned' => Order::where('status', '!=', 'canceled')->sum('total'),
            'avg_order_total' => Order::avg('total'),
            'category' => [
                'toys' => Order::whereCategory('toys')->count(),
                'books' => Order::whereCategory('books')->count(), 
                'home_supplies' => Order::whereCategory('home supplies')->count(),
                'accessories' => Order::whereCategory('accessories')->count(),
                'gadgets' => Order::whereCategory('gadgets')->count(),
                'food' => Order::whereCategory('food')->count(),
                'appliances' => Order::whereCategory('appliances')->count()
            ],

            'status' => [
                'processing' => Order::whereStatus('processing')->count(), 
                'shipped' => Order::whereStatus('shipped')->count(), 
                'delivered' => Order::whereStatus('delivered')->count(),
                'canceled' => Order::whereStatus('canceled')->count()
            ],
            
            'promotion' =>[
                'used' => Order::wherePromo(1)->count(),
                'not_used'=> Order::wherePromo(0)->count()
            ],

            'year' =>[
                '10' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(10),
                    Carbon::parse('2021-12-31')->subYears(10)
                    ])->where('status', '!=', 'canceled')->sum('total'), //->count()

                '9' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(9),
                    Carbon::parse('2021-12-31')->subYears(9)
                    ])->where('status', '!=', 'canceled')->sum('total'),

                '8' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(8),
                    Carbon::parse('2021-12-31')->subYears(8)
                    ])->where('status', '!=', 'canceled')->sum('total'),

                '7' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(7),
                    Carbon::parse('2021-12-31')->subYears(7)
                    ])->where('status', '!=', 'canceled')->sum('total'),

                '6' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(6),
                    Carbon::parse('2021-12-31')->subYears(6)
                    ])->where('status', '!=', 'canceled')->sum('total'),

                '5' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(5),
                    Carbon::parse('2021-12-31')->subYears(5)
                    ])->where('status', '!=', 'canceled')->sum('total'),

                '4' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(4),
                    Carbon::parse('2021-12-31')->subYears(4)
                    ])->where('status', '!=', 'canceled')->sum('total'),

                '3' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(3),
                    Carbon::parse('2021-12-31')->subYears(3)
                    ])->where('status', '!=', 'canceled')->sum('total'),

                '2' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(2),
                    Carbon::parse('2021-12-31')->subYears(2)
                    ])->where('status', '!=', 'canceled')->sum('total'),

                '1' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(1),
                    Carbon::parse('2021-12-31')->subYears(1)
                    ])->where('status', '!=', 'canceled')->sum('total'),

                '0' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01'),
                    Carbon::parse('2021-12-31')
                    ])->where('status', '!=', 'canceled')->sum('total')
            ]
        ];
        return view('order')->withData($data);
        //return response()->json($data, 200, [], JSON_PRETTY_PRINT);
        //dd($data);
    }
}
