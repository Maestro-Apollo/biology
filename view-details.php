<?php
session_start();
include_once('./util/website-api.php');
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
            <div class="row">
                <div class="col-md-12 bg-white p-4">
                    <h1 class="text-center bg-warning p-4 font-weight-bold" id="Headline"></h1>
                    <div class="row mt-5 text-center">
                        <div class="col-3">
                            <h2 id="path"></h2>
                            <p>Pathogen</p>
                        </div>
                        <div class="col-3">
                            <h2 id="anti"></h2>

                            <p>Antimicrobial Activity</p>
                        </div>
                        <div class="col-3">
                            <h2 id="spore"></h2>

                            <p>Spore Forming</p>
                        </div>
                        <div class="col-3">
                            <h2 id="bio"></h2>

                            <p>Biofilm Forming</p>
                        </div>
                        <div class="col-3 mt-3">
                            <h2 id="extre"></h2>

                            <p>Extremophile</p>
                        </div>
                        <div class="col-3 mt-3">
                            <h2 id="bac"></h2>

                            <p>Bac Gram Stain</p>
                        </div>
                        <div class="col-3 mt-3">
                            <h2 id="micro"></h2>

                            <p>Microbiome Host</p>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </section>




    <?php include('layout/script.php') ?>
    <script>
    $(document).ready(function() {
        $.ajax({
            'type': "POST",
            'dataType': 'JSON',
            'url': "<?php echo $website ?>/info/single-details.php",
            'data': {
                "id": '<?php echo $_GET['id'] ?>',
            },
            'success': function(data) {
                console.log(data);
                $('#Headline').text(data[0].scientific_name);
                $('#path').text(data[0].pathogen);
                $('#anti').text(data[0].antimicrobial_activity);
                $('#spore').text(data[0].spore_forming);
                $('#bio').text(data[0].biofilm_forming);
                $('#extre').text(data[0].extremophile);
                $('#bac').text(data[0].bac_gram_stain);
                $('#micro').text(data[0].microbiome_host);

            }
        });
    })
    </script>


</body>

</html>