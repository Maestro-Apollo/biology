<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include('layout/style.php'); ?>


    <style>
    .navbar-brand {
        width: 10% !important;
    }

    .bg_color {
        background-color: #fff !important;
    }

    body {
        font-family: 'Lato', sans-serif;
    }

    .carousel-caption {
        top: 50%;
        transform: translateY(-50%);
        bottom: initial;
        -webkit-transform-style: preserve-3d;
        -moz-transform-style: preserve-3d;
        transform-style: preserve-3d;
    }

    .carousel .carousel-item {
        height: 80vh;
    }

    .carousel-item img {
        position: absolute;
        top: 0;
        left: 0;
        min-height: 80vh;
        object-fit: cover;

    }

    section {
        padding: 60px 0;
    }

    .carousel-item:after {
        content: "";
        display: block;
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background: rgba(0, 0, 0, 0.7);
    }
    </style>
    <script src="https://cdn.plot.ly/plotly-2.14.0.min.js"></script>



</head>

<body class="bg-dark">
    <?php include('layout/navbar.php'); ?>

    <section>
        <div class="container">
            <h1 class="text-center text-white font-weight-bold">Bar Plot</h1>
            <div class="col-md-12 bg-white">
                <canvas id="myChart"></canvas>
            </div>
            <div id="tester"></div>
        </div>
    </section>




    <?php include('layout/script.php') ?>
    <script>
    var result_data = function() {
        var arr = [];
        $.ajax({
            'async': false,
            'type': "GET",
            'global': false,
            'dataType': 'JSON',
            'url': "http://localhost/biology/info/bar-plot.php",

            'success': function(data) {
                a = Object.keys(data[0]);
                var result = Object.values(data[0]).map(function(x) {
                    return parseInt(x, 10);
                });
                arr.push(a);
                arr.push(result);
            }
        });
        return arr;
    }();


    var result_data1 = function() {
        var label = [];
        var valueData = [];
        var arr = [];
        $.ajax({
            'async': false,
            'type': "GET",
            'global': false,
            'dataType': 'JSON',
            'url': "http://localhost/biology/info/polar-chart.php",

            'success': function(data) {
                for (let i = 0; i < data.length; i++) {
                    label.push(data[i].scientific_name);
                    valueData.push(data[i].Total);

                }
                var result = valueData.map(function(x) {
                    return parseInt(x, 10);
                });
                arr.push(label);
                arr.push(result);
            }
        });
        return arr;
    }();



    console.log(result_data);
    console.log(result_data1);
    </script>
    <script>
    var data = [{
        y: result_data1[1],
        boxpoints: 'all',
        jitter: 0.3,
        pointpos: -1.8,
        type: 'box'
    }];

    var layout = {
        title: 'Microbiome(Extreme) Extremophile(Yes)',
        showlegend: false
    };

    Plotly.newPlot('tester', data, layout, {
        displaylogo: false,
        responsive: true,
        scrollZoom: true
    });
    </script>
    <script src="./js/plot1.js"></script>




</body>

</html>