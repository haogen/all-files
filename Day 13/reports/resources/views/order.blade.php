<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders Reporting</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-5">
        <div class="row">
            <h2>Orders Reporting</h2>
            <hr>
            <div class="col-4" >
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">${{ number_format($data['total_earned'], 2, '.', ',') }}</h3>
                        <p class="card-text">
                            Total Earned
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-4">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">{{ number_format($data['avg_order_total'], 2, '.', ',') }}</h3>
                        <p class="card-text">
                            Average Total of Earned
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-4 mb-2">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">{{ $data['category']['toys'] }}</h3>
                        <p class="card-text">
                            Toys Category Orders
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-4 mb-2">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">{{ $data['category']['books'] }}</h3>
                        <p class="card-text">
                            Books Category Orders
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-4 mb-2">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">{{ $data['category']['home_supplies'] }}</h3>
                        <p class="card-text">
                            Home Supplies Category Orders
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-4 mb-2">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">{{ $data['category']['accessories'] }}</h3>
                        <p class="card-text">
                            Accessories Category Orders
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-4 mb-2">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">{{ $data['category']['gadgets'] }}</h3>
                        <p class="card-text">
                            Gadgets Category Orders
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-4 mb-2">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">{{ $data['category']['food'] }}</h3>
                        <p class="card-text">
                            Food Category Orders
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-4 mb-2">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">{{ $data['category']['appliances'] }}</h3>
                        <p class="card-text">
                            Appliances Category Orders
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-4 mb-2">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">{{ $data['status']['processing'] }}</h3>
                        <p class="card-text">
                            Processing Orders 
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-4 mb-2">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">{{ $data['status']['shipped'] }}</h3>
                        <p class="card-text">
                            Shipped Orders 
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-4 mb-2">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">{{ $data['status']['delivered'] }}</h3>
                        <p class="card-text">
                            Delivered Orders
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-4 mb-2">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">{{ $data['status']['canceled'] }}</h3>
                        <p class="card-text">
                            Canceled Orders Status
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-4 mb-2">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">{{ $data['promotion']['used'] }}</h3>
                        <p class="card-text">
                            Orders with Promotion  
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-4 mb-2">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">{{ $data['promotion']['not_used'] }}</h3>
                        <p class="card-text">
                             Orders without Promotion 
                        </p>
                    </div>
                </div>
            </div>
 
            <div class="col-12"></div>
            <div class="col-4 mb-2">
                <canvas id="bycategory" width="100px" height="100px"></canvas>
            </div>
            <div class="col-4 mb-2">
                <canvas id="bystatus" width="100px" height="100px"></canvas>
            </div> 
            <div class="col-4 mb-2">
                <canvas id="bypromotion" width="100px" height="100px"></canvas>
            </div> 
            <div class="col-12">
                <canvas id="byyear" width="100px" height="50px"></canvas>
            </div> 
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.3.2/dist/chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
    <script> 
    var myChart = new Chart(document.getElementById('bycategory').getContext('2d'), {
        type: 'pie',
        data: {
            labels: [
                'Toys', 
                'Books', 
                'Home Supplies', 
                'Accessories',
                'Gadgets', 
                'Food', 
                'Appliances'
            ],
            datasets: [{ 
                data: [
                    {{$data['category']['toys']}},
                    {{$data['category']['books']}},
                    {{$data['category']['home_supplies']}},
                    {{$data['category']['accessories']}},
                    {{$data['category']['gadgets']}}, 
                    {{$data['category']['food']}},
                    {{$data['category']['appliances']}}
                ],
                backgroundColor: [
                    'red', 'blue','orange', 'green',
                    'yellow', 'violet', 'bluegreen'
                ]
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Orders by Category'
                }
            }
        }
    });
    </script>

    <script> 
    var myChart = new Chart(document.getElementById('bystatus').getContext('2d'), {
        type: 'pie',
        data: {
            labels: [
                'Processing', 'Shipped',
                'Delivered', 'Canceled'
            ],
            datasets: [{ 
                data: [
                    {{$data['status']['processing']}},
                    {{$data['status']['shipped']}},
                    {{$data['status']['delivered']}},
                    {{$data['status']['canceled']}}
                ],
                backgroundColor: [
                    'lightblue', 'orange',
                    'pink', 'black'
                ]
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Orders by Status'
                }
            }
        }
    });
    </script>

    <script> 
    var myChart = new Chart(document.getElementById('bypromotion').getContext('2d'), {
        type: 'pie',
        data: {
            labels: [
                'With Promotion', 
                'Without Promotion'
            ],
            datasets: [{ 
                data: [
                    {{$data['promotion']['used']}},
                    {{$data['promotion']['not_used']}}
                ],
                backgroundColor: [
                    'yellow',
                    'gray'
                ]
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Orders by Promotion'
                }
            }
        }
    });
    </script>

    <script> 
    var myChart = new Chart(document.getElementById('byyear').getContext('2d'), {
            type: 'bar',
            data: {
                labels: [
                    '2010', 
                    '2011', 
                    '2012', 
                    '2013', 
                    '2014',
                    '2015', 
                    '2016', 
                    '2017', 
                    '2018', 
                    '2019',
                    '2020', 
                    '2021'
                    ],
                datasets: [{
                    label: 'Orders By Year',
                    data: [
                        {{$data['year']['10']}}, 
                        {{$data['year']['9']}}, 
                        {{$data['year']['8']}}, 
                        {{$data['year']['7']}}, 
                        {{$data['year']['6']}}, 
                        {{$data['year']['5']}},
                        {{$data['year']['4']}}, 
                        {{$data['year']['3']}}, 
                        {{$data['year']['2']}}, 
                        {{$data['year']['1']}}
                        ],
                    backgroundColor: [
                        'red',
                        'green',
                        'orange',
                        'violet',
                        'pink',
                        'black',
                        'lightblue',
                        'yellow',
                        'maroon',
                        'purple',
                        'gray',
                        'lightgreen'
                    ],
                    borderColor: [
                        'red',
                        'green',
                        'orange',
                        'violet',
                        'pink',
                        'black',
                        'lightblue',
                        'yellow',
                        'maroon',
                        'purple',
                        'gray',
                        'lightgreen'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

</body>

</html>