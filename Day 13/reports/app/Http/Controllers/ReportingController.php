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
    public function summary()
    {
        $data = [
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

            'total_date' =>[
                '10' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(10),
                    Carbon::parse('2021-12-31')->subYears(10)
                    ])->count(), //->count()

                '9' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(9),
                    Carbon::parse('2021-12-31')->subYears(9)
                    ])->count(),

                '8' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(8),
                    Carbon::parse('2021-12-31')->subYears(8)
                    ])->count(),

                '7' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(7),
                    Carbon::parse('2021-12-31')->subYears(7)
                    ])->count(),

                '6' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(6),
                    Carbon::parse('2021-12-31')->subYears(6)
                    ])->count(),

                '5' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(5),
                    Carbon::parse('2021-12-31')->subYears(5)
                    ])->count(),

                '4' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(4),
                    Carbon::parse('2021-12-31')->subYears(4)
                    ])->count(),

                '3' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(3),
                    Carbon::parse('2021-12-31')->subYears(3)
                    ])->count(),

                '2' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(2),
                    Carbon::parse('2021-12-31')->subYears(2)
                    ])->count(),

                '1' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(1),
                    Carbon::parse('2021-12-31')->subYears(1)
                    ])->count(),

                '0' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01'),
                    Carbon::parse('2021-12-31')
                    ])->count()
                ],

            'cancelled_year' =>[
                '10' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(10),
                    Carbon::parse('2021-12-31')->subYears(10)
                    ])->where('status', '=', 'canceled')->count(), //->count()

                '9' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(9),
                    Carbon::parse('2021-12-31')->subYears(9)
                    ])->where('status', '=', 'canceled')->count(),

                '8' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(8),
                    Carbon::parse('2021-12-31')->subYears(8)
                    ])->where('status', '=', 'canceled')->count(),

                '7' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(7),
                    Carbon::parse('2021-12-31')->subYears(7)
                    ])->where('status', '=', 'canceled')->count(),

                '6' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(6),
                    Carbon::parse('2021-12-31')->subYears(6)
                    ])->where('status', '=', 'canceled')->count(),

                '5' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(5),
                    Carbon::parse('2021-12-31')->subYears(5)
                    ])->where('status', '=', 'canceled')->count(),

                '4' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(4),
                    Carbon::parse('2021-12-31')->subYears(4)
                    ])->where('status', '=', 'canceled')->count(),

                '3' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(3),
                    Carbon::parse('2021-12-31')->subYears(3)
                    ])->where('status', '=', 'canceled')->count(),

                '2' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(2),
                    Carbon::parse('2021-12-31')->subYears(2)
                    ])->where('status', '=', 'canceled')->count(),

                '1' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(1),
                    Carbon::parse('2021-12-31')->subYears(1)
                    ])->where('status', '=', 'canceled')->count(),

                '0' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01'),
                    Carbon::parse('2021-12-31')
                    ])->where('status', '=', 'canceled')->count()
                ],

                'delivered_year' =>[
                    '10' => Order::whereBetween('order_date',[
                        Carbon::parse('2021-01-01')->subYears(10),
                        Carbon::parse('2021-12-31')->subYears(10)
                        ])->where('status', '=', 'delivered')->count(), //->count()
    
                    '9' => Order::whereBetween('order_date',[
                        Carbon::parse('2021-01-01')->subYears(9),
                        Carbon::parse('2021-12-31')->subYears(9)
                        ])->where('status', '=', 'delivered')->count(),
    
                    '8' => Order::whereBetween('order_date',[
                        Carbon::parse('2021-01-01')->subYears(8),
                        Carbon::parse('2021-12-31')->subYears(8)
                        ])->where('status', '=', 'delivered')->count(),
    
                    '7' => Order::whereBetween('order_date',[
                        Carbon::parse('2021-01-01')->subYears(7),
                        Carbon::parse('2021-12-31')->subYears(7)
                        ])->where('status', '=', 'delivered')->count(),
    
                    '6' => Order::whereBetween('order_date',[
                        Carbon::parse('2021-01-01')->subYears(6),
                        Carbon::parse('2021-12-31')->subYears(6)
                        ])->where('status', '=', 'delivered')->count(),
    
                    '5' => Order::whereBetween('order_date',[
                        Carbon::parse('2021-01-01')->subYears(5),
                        Carbon::parse('2021-12-31')->subYears(5)
                        ])->where('status', '=', 'delivered')->count(),
    
                    '4' => Order::whereBetween('order_date',[
                        Carbon::parse('2021-01-01')->subYears(4),
                        Carbon::parse('2021-12-31')->subYears(4)
                        ])->where('status', '=', 'delivered')->count(),
    
                    '3' => Order::whereBetween('order_date',[
                        Carbon::parse('2021-01-01')->subYears(3),
                        Carbon::parse('2021-12-31')->subYears(3)
                        ])->where('status', '=', 'delivered')->count(),
    
                    '2' => Order::whereBetween('order_date',[
                        Carbon::parse('2021-01-01')->subYears(2),
                        Carbon::parse('2021-12-31')->subYears(2)
                        ])->where('status', '=', 'delivered')->count(),

                    '1' => Order::whereBetween('order_date',[
                        Carbon::parse('2021-01-01')->subYears(1),
                        Carbon::parse('2021-12-31')->subYears(1)
                        ])->where('status', '=', 'delivered')->count(),
    
                    '0' => Order::whereBetween('order_date',[
                        Carbon::parse('2021-01-01'),
                        Carbon::parse('2021-12-31')
                        ])->where('status', '=', 'delivered')->count()
                 ]
        ];
        
        return view('summary')->withData($data);
    }

    public function category_toys()
    {
        $data = [

            'category_toys' => [
                'toys_pending' => Order::whereCategory('toys')->whereStatus('pending')->count(),
                'toys_process' => Order::whereCategory('toys')->whereStatus('processing')->count(),
                'toys_ship' => Order::whereCategory('toys')->whereStatus('shipped')->count(), 
                'toys_deliver' => Order::whereCategory('toys')->whereStatus('delivered')->count(),
                'toys_cancel' => Order::whereCategory('toys')->whereStatus('canceled')->count()
            ],

            'year_toys' =>[
                '10' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(10),
                    Carbon::parse('2021-12-31')->subYears(10)
                    ])->where('category', '=', 'toys')->count(),

                '9' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(9),
                    Carbon::parse('2021-12-31')->subYears(9)
                    ])->where('category', '=', 'toys')->count(),

                '8' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(8),
                    Carbon::parse('2021-12-31')->subYears(8)
                    ])->where('category', '=', 'toys')->count(),

                '7' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(7),
                    Carbon::parse('2021-12-31')->subYears(7)
                    ])->where('category', '=', 'toys')->count(),

                '6' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(6),
                    Carbon::parse('2021-12-31')->subYears(6)
                    ])->where('category', '=', 'toys')->count(),

                '5' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(5),
                    Carbon::parse('2021-12-31')->subYears(5)
                    ])->where('category', '=', 'toys')->count(),

                '4' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(4),
                    Carbon::parse('2021-12-31')->subYears(4)
                    ])->where('category', '=', 'toys')->count(),

                '3' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(3),
                    Carbon::parse('2021-12-31')->subYears(3)
                    ])->where('category', '=', 'toys')->count(),

                '2' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(2),
                    Carbon::parse('2021-12-31')->subYears(2)
                    ])->where('category', '=', 'toys')->sum('total'),

                '1' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(1),
                    Carbon::parse('2021-12-31')->subYears(1)
                    ])->where('category', '=', 'toys')->sum('total'),

                '0' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01'),
                    Carbon::parse('2021-12-31')
                    ])->where('category', '=', 'toys')->count()
                ]
        ];
        return view('category_toys')->withData($data);
    }

    public function category_books()
    {
        $data = [
            'category_books' => [
                'books_pending' => Order::whereCategory('books')->whereStatus('pending')->count(),
                'books_process' => Order::whereCategory('books')->whereStatus('processing')->count(),
                'books_ship' => Order::whereCategory('books')->whereStatus('shipped')->count(), 
                'books_deliver' => Order::whereCategory('books')->whereStatus('delivered')->count(),
                'books_cancel' => Order::whereCategory('books')->whereStatus('canceled')->count()
            ],

            'year_books' =>[
                '10' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(10),
                    Carbon::parse('2021-12-31')->subYears(10)
                    ])->where('category', '=', 'books')->count(),

                '9' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(9),
                    Carbon::parse('2021-12-31')->subYears(9)
                    ])->where('category', '=', 'books')->count(),

                '8' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(8),
                    Carbon::parse('2021-12-31')->subYears(8)
                    ])->where('category', '=', 'books')->count(),

                '7' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(7),
                    Carbon::parse('2021-12-31')->subYears(7)
                    ])->where('category', '=', 'books')->count(),

                '6' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(6),
                    Carbon::parse('2021-12-31')->subYears(6)
                    ])->where('category', '=', 'books')->count(),

                '5' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(5),
                    Carbon::parse('2021-12-31')->subYears(5)
                    ])->where('category', '=', 'books')->count(),

                '4' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(4),
                    Carbon::parse('2021-12-31')->subYears(4)
                    ])->where('category', '=', 'books')->count(),

                '3' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(3),
                    Carbon::parse('2021-12-31')->subYears(3)
                    ])->where('category', '=', 'books')->count(),

                '2' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(2),
                    Carbon::parse('2021-12-31')->subYears(2)
                    ])->where('category', '=', 'books')->count(),

                '1' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(1),
                    Carbon::parse('2021-12-31')->subYears(1)
                    ])->where('category', '=', 'books')->count(),

                '0' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01'),
                    Carbon::parse('2021-12-31')
                    ])->where('category', '=', 'books')->count()
                ]

        ];
        return view('category_books')->withData($data);
    }

    public function category_homesup()
    {
        $data = [
            
            'category_homesupp' => [
                'homesupp_pending' => Order::whereCategory('home supplies')->whereStatus('pending')->count(),
                'homesupp_process' => Order::whereCategory('home supplies')->whereStatus('processing')->count(),
                'homesupp_ship' => Order::whereCategory('home supplies')->whereStatus('shipped')->count(), 
                'homesupp_deliver' => Order::whereCategory('home supplies')->whereStatus('delivered')->count(),
                'homesupp_cancel' => Order::whereCategory('home supplies')->whereStatus('canceled')->count()
            ],

            'year_homesupp' =>[
                '10' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(10),
                    Carbon::parse('2021-12-31')->subYears(10)
                    ])->where('category', '=', 'home supplies')->count(),

                '9' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(9),
                    Carbon::parse('2021-12-31')->subYears(9)
                    ])->where('category', '=', 'home supplies')->count(),

                '8' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(8),
                    Carbon::parse('2021-12-31')->subYears(8)
                    ])->where('category', '=', 'home supplies')->count(),

                '7' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(7),
                    Carbon::parse('2021-12-31')->subYears(7)
                    ])->where('category', '=', 'home supplies')->count(),

                '6' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(6),
                    Carbon::parse('2021-12-31')->subYears(6)
                    ])->where('category', '=', 'home supplies')->count(),

                '5' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(5),
                    Carbon::parse('2021-12-31')->subYears(5)
                    ])->where('category', '=', 'home supplies')->count(),

                '4' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(4),
                    Carbon::parse('2021-12-31')->subYears(4)
                    ])->where('category', '=', 'home supplies')->count(),

                '3' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(3),
                    Carbon::parse('2021-12-31')->subYears(3)
                    ])->where('category', '=', 'home supplies')->count(),

                '2' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(2),
                    Carbon::parse('2021-12-31')->subYears(2)
                    ])->where('category', '=', 'home supplies')->count(),

                '1' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(1),
                    Carbon::parse('2021-12-31')->subYears(1)
                    ])->where('category', '=', 'home supplies')->count(),

                '0' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01'),
                    Carbon::parse('2021-12-31')
                    ])->where('category', '=', 'home supplies')->count()
                ]
        ];
        return view('category_homesup')->withData($data);
    }

    public function category_accessories()
    {
        $data = [
            'category_access' => [
                'access_pending' => Order::whereCategory('accessories')->whereStatus('pending')->count(),
                'access_process' => Order::whereCategory('accessories')->whereStatus('processing')->count(),
                'access_ship' => Order::whereCategory('accessories')->whereStatus('shipped')->count(), 
                'access_deliver' => Order::whereCategory('accessories')->whereStatus('delivered')->count(),
                'access_cancel' => Order::whereCategory('accessories')->whereStatus('canceled')->count()
            ],

            'year_access' =>[
                '10' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(10),
                    Carbon::parse('2021-12-31')->subYears(10)
                    ])->where('category', '=', 'accessories')->count(),

                '9' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(9),
                    Carbon::parse('2021-12-31')->subYears(9)
                    ])->where('category', '=', 'accessories')->count(),

                '8' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(8),
                    Carbon::parse('2021-12-31')->subYears(8)
                    ])->where('category', '=', 'accessories')->count(),

                '7' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(7),
                    Carbon::parse('2021-12-31')->subYears(7)
                    ])->where('category', '=', 'accessories')->count(),

                '6' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(6),
                    Carbon::parse('2021-12-31')->subYears(6)
                    ])->where('category', '=', 'accessories')->count(),

                '5' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(5),
                    Carbon::parse('2021-12-31')->subYears(5)
                    ])->where('category', '=', 'accessories')->count(),

                '4' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(4),
                    Carbon::parse('2021-12-31')->subYears(4)
                    ])->where('category', '=', 'accessories')->count(),

                '3' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(3),
                    Carbon::parse('2021-12-31')->subYears(3)
                    ])->where('category', '=', 'accessories')->count(),

                '2' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(2),
                    Carbon::parse('2021-12-31')->subYears(2)
                    ])->where('category', '=', 'accessories')->count(),

                '1' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(1),
                    Carbon::parse('2021-12-31')->subYears(1)
                    ])->where('category', '=', 'accessories')->count(),

                '0' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01'),
                    Carbon::parse('2021-12-31')
                    ])->where('category', '=', 'accessories')->count()
                ]
            
        ];
        return view('category_accessories')->withData($data);
    }

    public function category_gadgets()
    {
        $data = [
            'category_gadgets' => [
                'gadgets_pending' => Order::whereCategory('gadgets')->whereStatus('pending')->count(),
                'gadgets_process' => Order::whereCategory('gadgets')->whereStatus('processing')->count(),
                'gadgets_ship' => Order::whereCategory('gadgets')->whereStatus('shipped')->count(), 
                'gadgets_deliver' => Order::whereCategory('gadgets')->whereStatus('delivered')->count(),
                'gadgets_cancel' => Order::whereCategory('gadgets')->whereStatus('canceled')->count()
            ],

            'year_gadgets' =>[
                '10' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(10),
                    Carbon::parse('2021-12-31')->subYears(10)
                    ])->where('category', '=', 'gadgets')->count(),

                '9' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(9),
                    Carbon::parse('2021-12-31')->subYears(9)
                    ])->where('category', '=', 'gadgets')->count(),

                '8' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(8),
                    Carbon::parse('2021-12-31')->subYears(8)
                    ])->where('category', '=', 'gadgets')->count(),

                '7' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(7),
                    Carbon::parse('2021-12-31')->subYears(7)
                    ])->where('category', '=', 'gadgets')->count(),

                '6' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(6),
                    Carbon::parse('2021-12-31')->subYears(6)
                    ])->where('category', '=', 'gadgets')->count(),

                '5' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(5),
                    Carbon::parse('2021-12-31')->subYears(5)
                    ])->where('category', '=', 'gadgets')->count(),

                '4' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(4),
                    Carbon::parse('2021-12-31')->subYears(4)
                    ])->where('category', '=', 'gadgets')->count(),

                '3' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(3),
                    Carbon::parse('2021-12-31')->subYears(3)
                    ])->where('category', '=', 'gadgets')->count(),

                '2' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(2),
                    Carbon::parse('2021-12-31')->subYears(2)
                    ])->where('category', '=', 'gadgets')->count(),

                '1' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(1),
                    Carbon::parse('2021-12-31')->subYears(1)
                    ])->where('category', '=', 'gadgets')->count(),

                '0' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01'),
                    Carbon::parse('2021-12-31')
                    ])->where('category', '=', 'gadgets')->count()
                ]
            
        ];
        return view('category_gadgets')->withData($data);
    }

    public function category_food()
    {
        $data = [
            'category_food' => [
                'food_pending' => Order::whereCategory('food')->whereStatus('pending')->count(),
                'food_process' => Order::whereCategory('food')->whereStatus('processing')->count(),
                'food_ship' => Order::whereCategory('food')->whereStatus('shipped')->count(), 
                'food_deliver' => Order::whereCategory('food')->whereStatus('delivered')->count(),
                'food_cancel' => Order::whereCategory('food')->whereStatus('canceled')->count()
            ],

            'year_food' =>[
                '10' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(10),
                    Carbon::parse('2021-12-31')->subYears(10)
                    ])->where('category', '=', 'food')->count(),

                '9' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(9),
                    Carbon::parse('2021-12-31')->subYears(9)
                    ])->where('category', '=', 'food')->count(),

                '8' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(8),
                    Carbon::parse('2021-12-31')->subYears(8)
                    ])->where('category', '=', 'food')->count(),

                '7' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(7),
                    Carbon::parse('2021-12-31')->subYears(7)
                    ])->where('category', '=', 'food')->count(),

                '6' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(6),
                    Carbon::parse('2021-12-31')->subYears(6)
                    ])->where('category', '=', 'food')->count(),

                '5' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(5),
                    Carbon::parse('2021-12-31')->subYears(5)
                    ])->where('category', '=', 'food')->count(),

                '4' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(4),
                    Carbon::parse('2021-12-31')->subYears(4)
                    ])->where('category', '=', 'food')->count(),

                '3' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(3),
                    Carbon::parse('2021-12-31')->subYears(3)
                    ])->where('category', '=', 'food')->count(),

                '2' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(2),
                    Carbon::parse('2021-12-31')->subYears(2)
                    ])->where('category', '=', 'food')->count(),

                '1' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(1),
                    Carbon::parse('2021-12-31')->subYears(1)
                    ])->where('category', '=', 'food')->count(),

                '0' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01'),
                    Carbon::parse('2021-12-31')
                    ])->where('category', '=', 'food')->count()
                ]
            
        ];
        return view('category_food')->withData($data);
    }

    public function category_appliances()
    {
        $data = [
            'category_appliances' => [
                'appliances_pending' => Order::whereCategory('appliances')->whereStatus('pending')->count(),
                'appliances_process' => Order::whereCategory('appliances')->whereStatus('processing')->count(),
                'appliances_ship' => Order::whereCategory('appliances')->whereStatus('shipped')->count(), 
                'appliances_deliver' => Order::whereCategory('appliances')->whereStatus('delivered')->count(),
                'appliances_cancel' => Order::whereCategory('appliances')->whereStatus('canceled')->count()
            ],

            'year_appliances' =>[
                '10' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(10),
                    Carbon::parse('2021-12-31')->subYears(10)
                    ])->where('category', '=', 'appliances')->count(),

                '9' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(9),
                    Carbon::parse('2021-12-31')->subYears(9)
                    ])->where('category', '=', 'appliances')->count(),

                '8' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(8),
                    Carbon::parse('2021-12-31')->subYears(8)
                    ])->where('category', '=', 'appliances')->count(),

                '7' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(7),
                    Carbon::parse('2021-12-31')->subYears(7)
                    ])->where('category', '=', 'appliances')->count(),

                '6' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(6),
                    Carbon::parse('2021-12-31')->subYears(6)
                    ])->where('category', '=', 'appliances')->count(),

                '5' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(5),
                    Carbon::parse('2021-12-31')->subYears(5)
                    ])->where('category', '=', 'appliances')->count(),

                '4' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(4),
                    Carbon::parse('2021-12-31')->subYears(4)
                    ])->where('category', '=', 'appliances')->count(),

                '3' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(3),
                    Carbon::parse('2021-12-31')->subYears(3)
                    ])->where('category', '=', 'appliances')->count(),

                '2' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(2),
                    Carbon::parse('2021-12-31')->subYears(2)
                    ])->where('category', '=', 'appliances')->count(),

                '1' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01')->subYears(1),
                    Carbon::parse('2021-12-31')->subYears(1)
                    ])->where('category', '=', 'appliances')->count(),

                '0' => Order::whereBetween('order_date',[
                    Carbon::parse('2021-01-01'),
                    Carbon::parse('2021-12-31')
                    ])->where('category', '=', 'appliances')->count()
                ]
            
        ];
        return view('category_appliances')->withData($data);
    }
}
