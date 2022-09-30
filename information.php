<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    /* .loading {
        display: none;
    } */

    #preloader {
        background: #fff url('images/loading-animations-preloader-gifs-ui-ux-effects-18.gif') no-repeat center center;
        height: 100vh;
        width: 100%;
        position: fixed;
        z-index: 100;
    }
    </style>
    <?php include('layout/style.php'); ?>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.3.0/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">

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

    div.modal-dialog {
        max-width: 100%;
        width: 75%;
    }

    div.modal-dialog .col-lg-4.col-form-label {
        flex: 0 0 15%;
        max-width: 15%;
        text-align: right;
    }

    div.modal-dialog .col-lg-8 {
        flex: 0 0 85%;
        max-width: 85%;
    }
    </style>


</head>


<body class="bg-dark">

    <div id="preloader"></div>


    <?php include('layout/navbar.php'); ?>



    <section>
        <div class="p-5 content">
            <div class="bg-white p-2">

                <table id="userTable" class="table table-striped table-bordered nowrap" style="width: 100%">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th> scientific_name </th>
                            <th> taxonomy_id </th>
                            <th> rank </th>
                            <th> domain </th>
                            <th> eukarya_type </th>
                            <th> type_fungi </th>
                            <th> lichen </th>
                            <th> type_algae </th>
                            <th> diatom </th>
                            <th> microbiome </th>
                            <th> microbiome_water </th>
                            <th> microbiome_water_fresh </th>
                            <th> microbiome_water_fresh_wetland </th>
                            <th> microbiome_water_marine </th>
                            <th> microbiome_water_sediment </th>
                            <th> microbiome_soil </th>
                            <th> microbiome_soil_type </th>
                            <th> microbiome_extreme </th>
                            <th> euk_algae_metabolism </th>
                            <th> euk_growth </th>
                            <th> euk_lifestyle </th>
                            <th> euk_lifestyle_benthic </th>
                            <th> euk_morphology </th>
                            <th> euk_symmetry </th>
                            <th> euk_secondary_structure </th>
                            <th> euk_secondary_structure_type </th>
                            <th> euk_pigmentation </th>
                            <th> euk_pigmentation_type </th>
                            <th> euk_locomotion </th>
                            <th> euk_locomotion_structure </th>
                            <th> biofilm_forming </th>
                            <th> extremophile </th>
                            <th> extremophile_type </th>
                            <th> euk_reproduction </th>
                            <th> spore_forming </th>
                            <th> euk_symbiosis </th>
                            <th> euk_symbiosis_host </th>
                            <th> pathogen </th>
                            <th> pathogen_host </th>
                            <th> euk_antagonism </th>
                            <th> euk_antagonism_type </th>
                            <th> euk_content_production </th>
                            <th> euk_content_list </th>
                            <th> euk_uv_resistant </th>
                            <th> euk_uv_resistant_list </th>
                            <th> euk_toxin </th>
                            <th> euk_toxin_type </th>
                            <th> metabolism </th>
                            <th> metabolism_energy </th>
                            <th> metabolism_electron_source </th>
                            <th> metabolism_carbon_source </th>
                            <th> microbiome_host </th>
                            <th> microbiome_host_human </th>
                            <th> pathogen_host_human </th>
                            <th> antimicrobial_activity </th>
                            <th> bac_oxygen_use </th>
                            <th> bac_gram_stain </th>
                            <th> virus_genome </th>
                            <th> virus_strand </th>
                            <th> virus_strand_sense </th>
                            <th> virus_capsid </th>
                            <th> virus_capsid_symmetry </th>
                            <th> reference </th>
                            <th> volunteer_name </th>

                        </tr>
                    </thead>


                </table>
            </div>
        </div>
    </section>




    <?php include('layout/script.php') ?>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.3.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>

    <script>
    // $("table").addClass("loading");
    var loader = document.getElementById("preloader");

    window.addEventListener("load", function() {
        loader.style.display = "none";
    })
    </script>
    <script>
    var return_first = function() {
        var tmp = null;
        $.ajax({
            'async': false,
            'type': "POST",
            'global': false,
            'dataType': 'text',
            'url': "http://localhost/biology/info/details.php",
            'data': {
                "tag": '<?php echo $_POST['tag'] ?>',
            },
            'success': function(data) {
                tmp = data;
            }
        });
        return tmp;
    }();



    // $(document).ready(function() {
    //     $.ajax({
    //         type: "POST",

    //         dataType: "text",
    //         success: function(response) {
    //             localData1 = response;
    //         },
    //         error: function(request, error) {
    //             console.log("ERROR:" + error);
    //         }
    //     });
    // })
    </script>

    <script>
    console.log(return_first);
    var userDataTable = $('#userTable').DataTable({
        data: (return_first) ? JSON.parse(return_first) : {},
        initComplete: function() {
            console.log('@@@ init complete @@@');
            $("table").removeClass("loading");
        },


        dom: 'Bfrtip',
        scrollX: true,
        scrollCollapse: true,
        buttons: [
            'copy', 'excel', {
                extend: 'csv',
                text: 'CSV',
                charset: 'utf-8',
                extension: '.csv',

                filename: 'export',
                bom: true
            }
        ],
        columns: [{
                data: "id",
                "render": function(data, type, row, meta) {
                    if (type === 'display') {
                        data = '<a href="view-details.php?id=' + data + '">' + data + '</a>';
                    }

                    return data;
                }
            },
            {
                data: "scientific_name"
            },
            {
                data: "taxonomy_id"
            },
            {
                data: "rank"
            },
            {
                data: "domain"
            },
            {
                data: "eukarya_type"
            },
            {
                data: "type_fungi"
            },
            {
                data: "lichen"
            },
            {
                data: "type_algae"
            },
            {
                data: "diatom"
            },
            {
                data: "microbiome"
            },
            {
                data: "microbiome_water"
            },
            {
                data: "microbiome_water_fresh"
            },
            {
                data: "microbiome_water_fresh_wetland"
            },
            {
                data: "microbiome_water_marine"
            },
            {
                data: "microbiome_water_sediment"
            },
            {
                data: "microbiome_soil"
            },
            {
                data: "microbiome_soil_type"
            },
            {
                data: "microbiome_extreme"
            },
            {
                data: "euk_algae_metabolism"
            },
            {
                data: "euk_growth"
            },
            {
                data: "euk_lifestyle"
            },
            {
                data: "euk_lifestyle_benthic"
            },
            {
                data: "euk_morphology"
            },
            {
                data: "euk_symmetry"
            },
            {
                data: "euk_secondary_structure"
            },
            {
                data: "euk_secondary_structure_type"
            },
            {
                data: "euk_pigmentation"
            },
            {
                data: "euk_pigmentation_type"
            },
            {
                data: "euk_locomotion"
            },
            {
                data: "euk_locomotion_structure"
            },
            {
                data: "biofilm_forming"
            },
            {
                data: "extremophile"
            },
            {
                data: "extremophile_type"
            },
            {
                data: "euk_reproduction"
            },
            {
                data: "spore_forming"
            },
            {
                data: "euk_symbiosis"
            },
            {
                data: "euk_symbiosis_host"
            },
            {
                data: "pathogen"
            },
            {
                data: "pathogen_host"
            },
            {
                data: "euk_antagonism"
            },
            {
                data: "euk_antagonism_type"
            },
            {
                data: "euk_content_production"
            },
            {
                data: "euk_content_list"
            },
            {
                data: "euk_uv_resistant"
            },
            {
                data: "euk_uv_resistant_list"
            },
            {
                data: "euk_toxin"
            },
            {
                data: "euk_toxin_type"
            },
            {
                data: "metabolism"
            },
            {
                data: "metabolism_energy"
            },
            {
                data: "metabolism_electron_source"
            },
            {
                data: "metabolism_carbon_source"
            },
            {
                data: "microbiome_host"
            },
            {
                data: "microbiome_host_human"
            },
            {
                data: "pathogen_host_human"
            },
            {
                data: "antimicrobial_activity"
            },
            {
                data: "bac_oxygen_use"
            },
            {
                data: "bac_gram_stain"
            },
            {
                data: "virus_genome"
            },
            {
                data: "virus_strand"
            },
            {
                data: "virus_strand_sense"
            },
            {
                data: "virus_capsid"
            },
            {
                data: "virus_capsid_symmetry"
            },
            {
                data: "reference"
            },
            {
                data: "volunteer_name"
            },

        ],
        responsive: {
            details: {
                display: $.fn.dataTable.Responsive.display.modal({
                    header: function(row) {
                        var data = row.data();
                        return 'Details';
                    }
                }),
                renderer: $.fn.dataTable.Responsive.renderer.tableAll({
                    tableClass: 'table'
                })
            }
        }
    });
    </script>





</body>

</html>