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
        height: 90vh;
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
        background: rgba(0, 0, 0, 0.1);
    }
    </style>


</head>

<body class="bg-dark">
    <?php include('layout/navbar.php'); ?>


    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="./images/bacteria-3662695.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h2>The Microbe Directory</h2>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="./images/microbiology-163470.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h2>The Microbe Directory</h2>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="./images/cells-4631924.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h2>The Microbe Directory</h2>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>




    <?php include('layout/script.php') ?>


</body>

</html>