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
            <h1 class="text-center text-white font-weight-bold">Bar Plots</h1>
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

    console.log(result_data);
    </script>
    <script>
    var data = [{
        x: result_data[0],
        y: result_data[1],
        type: 'bar',
        mode: 'markers+text',
        name: 'Markers and Text',
    }];

    var layout = {
        title: 'Bar Chart',
        showlegend: false
    };

    Plotly.newPlot('tester', data, layout, {
        displaylogo: false,
        responsive: true
    });
    </script>



</body>

</html>