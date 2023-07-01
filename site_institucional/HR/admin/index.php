<!DOCTYPE html>
<html lang="en">
<?php
    session_start();
    include('../../config.php');
?>
<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>HealthTrackr</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">

    <!-- Bootstrap core CSS -->
    <link href="<?php echo BASE_URL . 'assets/mdb/css/bootstrap.min.css'; ?>" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="<?php echo BASE_URL . 'assets/mdb/css/mdb.min.css'; ?>" rel="stylesheet">


    <!-- <link rel="icon" type="image/x-icon" href="../images/favicon.ico"> -->
    <!-- <link rel="icon" type="image/x-icon" href="<?php /* echo BASE_URL . 'images/teste.JPG'; */?>"> -->


    <style>

            html,
            body,
            header,
            .jarallax {
                height: 25px;
            }

            @media (max-width: 740px) {
                html,
                body,
                header,
                .jarallax {
                    height: 100vh;
                }
            }

            @media (min-width: 800px) and (max-width: 850px) {
                html,
                body,
                header,
                .jarallax {
                    height: 100vh;
                }
            }

            @media (min-width: 560px) and (max-width: 650px) {
                header .jarallax h1 {
                    margin-bottom: .5rem !important;
                }
                header .jarallax h5 {
                    margin-bottom: .5rem !important;
                }
            }

            @media (min-width: 660px) and (max-width: 700px) {
                header .jarallax h1 {
                    margin-bottom: 1.5rem !important;
                }
                header .jarallax h5 {
                    margin-bottom: 1.5rem !important;
                }
            }

            .top-nav-collapse {
                background-color: #9da4b1 !important;
            }
            .navbar:not(.top-nav-collapse) {
                background: transparent !important;
            }
            @media (max-width: 768px) {
                .navbar:not(.top-nav-collapse) {
                    background: #9da4b1 !important;
                }
            }

            @media (min-width: 800px) and (max-width: 850px) {
                .navbar:not(.top-nav-collapse) {
                    background: #9da4b1!important;
                }
            }

            footer.page-footer {
                background-color: #9da4b1;
            }

    </style>

</head>

<body>
    <?php
        include ('../humanResources.php');
        include ('../../layouts/header.php');
        include ('../partials/dashboard-admin.php');
    ?>
    
    <!--  SCRIPTS  -->
    <!-- JQuery -->
    <script typtext="javascript" src="../assets/mdb/js/jquery.min.js"></script>

    <!-- Bootstrap tooltips -->
    <script typtext="javascript" src="../assets/mdb/js/popper.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script typtext="javascript" src="../assets/mdb/js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script typtext="javascript" src="../assets/mdb/js/mdb.min.js"></script>

    
    <script>
        $(document).ready(() => {
            new WOW().init();
        });
    </script>
    
    <script
    src="https://code.jquery.com/jquery-3.7.0.js"
    integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM="
    crossorigin="anonymous"></script>
    
    <script>

        $('.edit').on('click', function(e) {
            $('#modal-edit').show();
        });
        // abrir modal editar
            // trazer dados do modal
        // enviar e limpar modal editar

    </script>
</body>

</html>
