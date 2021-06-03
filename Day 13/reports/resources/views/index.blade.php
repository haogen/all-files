<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reporting</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-5">
        <div class="row">
            <h2>Reporting</h2>
            <hr>
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">{{ $total_number_of_customers }}</h3>
                        <p class="card-text">
                            Total Number of Customers
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">{{ $total_number_of_customers_using_mobile }}</h3>
                        <p class="card-text">
                            Total Customers using Mobile
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">{{ $total_number_of_customers_using_browser }}</h3>
                        <p class="card-text">
                            Total Customers using browser
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">{{ $female_customers }}</h3>
                        <p class="card-text">
                            Female Customers
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <br>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">{{ $male_customers }}</h3>
                        <p class="card-text">
                            Male Customers
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">{{ $age['child'] }}</h3>
                        <p class="card-text">
                            Child Customers
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">{{ $age['adolescence'] }}</h3>
                        <p class="card-text">
                            Adolescence Customers
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">{{ $age['adult'] }}</h3>
                        <p class="card-text">
                            Adult Customers
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <br>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">{{ $age['senioradult'] }}</h3>
                        <p class="card-text">
                            Senior Customers
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">{{ $country['asia'] }}</h3>
                        <p class="card-text">
                            ASIA
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">{{ $country['europe'] }}</h3>
                        <p class="card-text">
                            EUROPE
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">{{ $country['us'] }}</h3>
                        <p class="card-text">
                            US
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <br>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">{{ $country['australia'] }}</h3>
                        <p class="card-text">
                            AUSTRALIA
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-9"></div>
            <div class="col-3">
                <canvas id="bydevice" width="100px" height="100px"></canvas>
            </div> 
            <div class="col-3">
                <canvas id="bygender" width="100px" height="100px"></canvas>
            </div>
            <div class="col-3">
                <canvas id="byage" width="100px" height="100px"></canvas>
            </div>
            <div class="col-3">
                <canvas id="bycountry" width="100px" height="100px"></canvas>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.3.2/dist/chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
    <script> 
    var myChart = new Chart(document.getElementById('bydevice').getContext('2d'), {
        type: 'pie',
        data: {
            labels: [
                'App',
                'Browser' 
            ],
            datasets: [{ 
                data: [
                    {{$total_number_of_customers_using_mobile}}, 
                    {{$total_number_of_customers_using_browser}}
                ],
                backgroundColor: [
                    'red',
                    'yellow' 
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
                    text: 'Customers by Device'
                }
            }
        }
    });
    </script>

    <script>
    var myChart = new Chart(document.getElementById('bygender').getContext('2d'), {
        type: 'pie',
        data: {
            labels: [
                'Female',
                'Male' 
            ],
            datasets: [{ 
                data: [
                    {{$female_customers}}, 
                    {{$male_customers}}
                ],
                backgroundColor: [
                    'lightblue',
                    'green' 
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
                    text: 'Customers by Gender'
                }
            }
        }
    });
    </script>

    <script>
    var myChart = new Chart(document.getElementById('byage').getContext('2d'), {
        type: 'pie',
        data: {
            labels: [
                'Child', 'Adolescence',
                'Adult', 'Senior'
            ],
            datasets: [{ 
                data: [
                    {{$age['child']}}, 
                    {{$age['adolescence']}},
                    {{$age['adult']}}, 
                    {{$age['senioradult']}}
                ],
                backgroundColor: [
                    'pink', 'blue',
                    'lightgreen','black' 
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
                    text: 'Customers by Age'
                }
            }
        }
    });
    </script>

    <script>
    var myChart = new Chart(document.getElementById('bycountry').getContext('2d'), {
        type: 'pie',
        data: {
            labels: [
                'ASIA', 'EUROPE',
                'US', 'AUSTRALIA'
            ],
            datasets: [{ 
                data: [
                    {{$country['asia']}}, 
                    {{$country['europe']}},
                    {{$country['us']}}, 
                    {{$country['australia']}}
                ],
                backgroundColor: [
                    'yellow', 'orange',
                    'violet','maroon' 
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
                    text: 'Customers by Country'
                }
            }
        }
    });
    </script>

</body>

</html>