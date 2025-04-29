
@extends('layouts.admin')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
       
        body {
        background-image: url('{{ asset('images/background2.jpg') }}');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
    }
        .sidebar {
            width: 250px;
            height: 100vh;
            background-color: #0f2a47;
            color: #fff;
        }
        .sidebar a {
            color: #fff;
            text-decoration: none;
            display: block;
            padding: 15px 20px;
        }
        .sidebar a:hover {
            background-color: #123456;
        }
        .card-style {
            border: none;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
<div class="d-flex">
    

    <!-- Content -->
    <div class="container-fluid p-4">
        <h3>Dashboard User</h3>
        <div class="row g-3">
            <div class="col-md-3">
                <div class="card card-style text-center p-3">
                    <small>Earning</small>
                    <h3>$ 628</h3>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-style text-center p-3">
                    <small>Share</small>
                    <h3>2434</h3>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-style text-center p-3">
                    <small>Likes</small>
                    <h3>1259</h3>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-style text-center p-3">
                    <small>Rating</small>
                    <h3>8.5 </h3>
                </div>
            </div>

            <!-- Bar Chart -->
            <div class="col-12">
                <div class="card card-style p-4">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h6>Result</h6>
                        <button class="btn btn-warning btn-sm">Check Now</button>
                    </div>
                    <canvas id="barChart"></canvas>
                </div>
            </div>

            <!-- Area Chart + Calendar -->
            <div class="col-md-8">
                <div class="card card-style p-3">
                    <canvas id="areaChart"></canvas>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-style p-3 text-center">
                    <h4>45%</h4>
                    <canvas id="circleChart"></canvas>
                    <ul class="list-unstyled mt-3">
                        <li>Lorem ipsum</li>
                        <li>Lorem ipsum</li>
                        <li>Lorem ipsum</li>
                        <li>Lorem ipsum</li>
                    </ul>
                    <button class="btn btn-warning">Check Now</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    new Chart(document.getElementById("barChart"), {
        type: 'bar',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
            datasets: [
                {
                    label: '2019',
                    backgroundColor: '#ffb100',
                    data: [20, 30, 25, 35, 28, 50, 22, 18, 26]
                },
                {
                    label: '2020',
                    backgroundColor: '#123456',
                    data: [35, 45, 33, 20, 30, 40, 25, 30, 33]
                }
            ]
        }
    });

    new Chart(document.getElementById("areaChart"), {
        type: 'line',
        data: {
            labels: ['1', '2', '3', '4', '5', '6', '7'],
            datasets: [
                {
                    label: 'Lorem Ipsum',
                    data: [0, 30, 20, 40, 25, 35, 0],
                    backgroundColor: 'rgba(255,177,0,0.3)',
                    borderColor: '#ffb100',
                    fill: true
                },
                {
                    label: 'Dolor Amet',
                    data: [0, 20, 35, 20, 30, 10, 0],
                    backgroundColor: 'rgba(18,52,86,0.3)',
                    borderColor: '#123456',
                    fill: true
                }
            ]
        }
    });

    new Chart(document.getElementById("circleChart"), {
        type: 'doughnut',
        data: {
            labels: ['Completed', 'Remaining'],
            datasets: [{
                data: [45, 55],
                backgroundColor: ['#ffb100', '#123456']
            }]
        }
    });
</script>
</body>
</html>
@endsection