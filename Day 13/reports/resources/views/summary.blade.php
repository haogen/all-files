<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Summary Reporting</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-5">
        <div class="row">
            <h2>Summary Reporting</h2>
            <hr>
            <div class="col-12"></div>
                <div class="col-4">
                    <canvas id="bytotal_year" width="100px" height="100px"></canvas>
                </div> 
                <div class="col-4 mb-2">
                    <canvas id="bycancelled_year" width="100px" height="100px"></canvas>
                </div> 
                <div class="col-4 mb-2">
                    <canvas id="bydelivered_year" width="100px" height="100px"></canvas>
                </div> 
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.3.2/dist/chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
 <script> 
    var myChart = new Chart(document.getElementById('bytotal_year').getContext('2d'), {
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
                    label: 'Total Orders Yearly',
                    data: [
                        {{$data['total_date']['10']}}, 
                        {{$data['total_date']['9']}}, 
                        {{$data['total_date']['8']}}, 
                        {{$data['total_date']['7']}}, 
                        {{$data['total_date']['6']}}, 
                        {{$data['total_date']['5']}},
                        {{$data['total_date']['4']}}, 
                        {{$data['total_date']['3']}}, 
                        {{$data['total_date']['2']}}, 
                        {{$data['total_date']['1']}}
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

    <script> 
    var myChart = new Chart(document.getElementById('bycancelled_year').getContext('2d'), {
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
                    label: 'Cancelled Sales Yearly',
                    data: [
                        {{$data['cancelled_year']['10']}}, 
                        {{$data['cancelled_year']['9']}}, 
                        {{$data['cancelled_year']['8']}}, 
                        {{$data['cancelled_year']['7']}}, 
                        {{$data['cancelled_year']['6']}}, 
                        {{$data['cancelled_year']['5']}},
                        {{$data['cancelled_year']['4']}}, 
                        {{$data['cancelled_year']['3']}}, 
                        {{$data['cancelled_year']['2']}}, 
                        {{$data['cancelled_year']['1']}}
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

    <script> 
    var myChart = new Chart(document.getElementById('bydelivered_year').getContext('2d'), {
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
                    label: 'Delivered Sales Yearly',
                    data: [
                        {{$data['delivered_year']['10']}}, 
                        {{$data['delivered_year']['9']}}, 
                        {{$data['delivered_year']['8']}}, 
                        {{$data['delivered_year']['7']}}, 
                        {{$data['delivered_year']['6']}}, 
                        {{$data['delivered_year']['5']}},
                        {{$data['delivered_year']['4']}}, 
                        {{$data['delivered_year']['3']}}, 
                        {{$data['delivered_year']['2']}}, 
                        {{$data['delivered_year']['1']}}
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