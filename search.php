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


</head>

<body class="bg-dark">
    <?php include('layout/navbar.php'); ?>






    <section>
        <div class="container">
            <form action="./information.php" method="post" id="myForm">
                <div class="row mt-5">
                    <div class="col-md-8 offset-md-2 p-4">
                        <h1 style="color: gold" class="text-center">SEARCH</h1>
                        <input type="text" name="tag" class="form-control" placeholder="Saccharomyces paradoxus">
                        <p class="text-white">Try a specific species, such as 'Saccharomyces paradoxus'</p>
                        <div class="text-center">
                            <input type="submit" name="submit" class="btn btn-outline-warning btn-lg font-weight-bold">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </section>




    <?php include('layout/script.php') ?>
    <script>
    // $(document).ready(function() {

    //     $('#myForm').submit(function(e) {
    //         e.preventDefault();
    //         let formData = new FormData(this);
    //         $.ajax({
    //             type: "POST",
    //             url: "http://localhost/biology/info/details.php",
    //             data: formData,
    //             contentType: false,
    //             processData: false,
    //             success: function(response) {
    //                 window.location.href = './information.php';
    //             }
    //         });


    //     });
    // })
    </script>


</body>

</html>