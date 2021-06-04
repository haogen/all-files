<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Category Reporting</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-5">
        <div class="row">
            <h2>Food Category Reporting</h2>
            <hr>
            <div class="col-4 mb-2" >
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">{{ $data['category_food']['food_pending'] }}</h3>
                        <p class="card-text">
                            Total Food Orders Pending
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-4 mb-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">{{ $data['category_food']['food_process'] }}</h3>
                        <p class="card-text">
                            Total Food Orders Processed
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-4 mb-2">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">{{ $data['category_food']['food_ship'] }}</h3>
                        <p class="card-text">
                            Total Food Orders Shipped
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-4 mb-2">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">{{ $data['category_food']['food_deliver'] }}</h3>
                        <p class="card-text">
                            Total Food Orders Delivered
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-4 mb-2">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">{{ $data['category_food']['food_cancel'] }}</h3>
                        <p class="card-text">
                            Total Food Orders Canceled
                        </p>
                    </div>
                </div>
            </div>
 
            <div class="col-12"></div>
            <div class="col-12">
                <canvas id="byfood_year" width="100px" height="30px"></canvas>
            </div> 
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.3.2/dist/chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
    <script> 
    var myChart = new Chart(document.getElementById('byfood_year').getContext('2d'), {
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
                    label: 'Food Orders By Year',
                    data: [
                        {{$data['year_food']['10']}}, 
                        {{$data['year_food']['9']}}, 
                        {{$data['year_food']['8']}}, 
                        {{$data['year_food']['7']}}, 
                        {{$data['year_food']['6']}}, 
                        {{$data['year_food']['5']}},
                        {{$data['year_food']['4']}}, 
                        {{$data['year_food']['3']}}, 
                        {{$data['year_food']['2']}}, 
                        {{$data['year_food']['1']}}
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