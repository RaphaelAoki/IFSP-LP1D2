<!DOCTYPE html>
<html lang="en">

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

        <link rel="icon" type="image/x-icon" href="/images/favicon.ico">


        <style>

            html,
                body,
                header,
                .view {
                height: 100vh;
                }

                @media (max-width: 740px) {
                html,
                body,
                header,
                .view {
                    height: 815px;
                }
                }

                @media (min-width: 800px) and (max-width: 850px) {
                html,
                body,
                header,
                .view  {
                    height: 650px;
                }
                }

                .intro-2 {
                    background: url("https://mdbootstrap.com/img/Photos/Horizontal/Nature/full page/img%20(11).jpg")no-repeat center center;
                    background-size: cover;
                }
                .top-nav-collapse {
                    background-color: #3f51b5 !important;
                }
                .navbar:not(.top-nav-collapse) {
                    background: transparent !important;
                }
                @media (max-width: 768px) {
                    .navbar:not(.top-nav-collapse) {
                        background: #3f51b5 !important;
                    }
                }
                @media (min-width: 800px) and (max-width: 850px) {
                    .navbar:not(.top-nav-collapse) {
                        background: #3f51b5!important;
                    }
                }

                .card {
                    background-color: rgba(229, 228, 255, 0.2);
                }
                .md-form label {
                    color: #ffffff;
                }
                h6 {
                    line-height: 1.7;
                }


                .card {
                    margin-top: 30px;
                    /*margin-bottom: -45px;*/

                }

                .md-form input[type=text]:focus:not([readonly]),
                .md-form input[type=password]:focus:not([readonly]) {
                    border-bottom: 1px solid #8EDEF8;
                    box-shadow: 0 1px 0 0 #8EDEF8;
                }
                .md-form input[type=text]:focus:not([readonly])+label,
                .md-form input[type=password]:focus:not([readonly])+label {
                    color: #8EDEF8;
                }

                .md-form .form-control {
                    color: #fff;
                }


            </style>

    </head>

    <body>

    <!--Main Navigation-->
    <header>

        <!--Intro Section-->
        <section class="view intro-2">
        <div class="mask rgba-gradient">
            <div class="container h-100 d-flex justify-content-center align-items-center">

            <!--Grid row-->
            <div class="row  pt-1 mt-3">

                <!--Grid column-->
                <div class="col-md-12">

                <div class="card">
                    <div class="card-body">

                    <h2 class="font-weight-bold my-4 text-center mb-5 mt-4 font-weight-bold">
                        <strong>REGISTER</strong>
                    </h2>
                    <hr>

                    <!--Grid row-->
                    <div class="row mt-5">

                        <!--Grid column-->
                        <div class="col-md-6 ml-lg-5 ml-md-3">

                        <!--Grid row-->
                        <div class="row pb-4">
                            <div class="col-2 col-lg-1">
                            <i class="fas fa-university indigo-text fa-lg"></i>
                            </div>
                            <div class="col-10">
                            <h4 class="font-weight-bold mb-4">
                                <strong>Safety</strong>
                            </h4>
                            <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores
                                nam, aperiam
                                minima assumenda deleniti hic.</p>
                            </div>
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row pb-4">
                            <div class="col-2 col-lg-1">
                            <i class="fas fa-desktop deep-purple-text fa-lg"></i>
                            </div>
                            <div class="col-10">
                            <h4 class="font-weight-bold mb-4">
                                <strong>Technology</strong>
                            </h4>
                            <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores
                                nam, aperiam
                                minima assumenda deleniti hic.</p>
                            </div>
                        </div>
                        <!--Grid row-->

                        </div>
                        <!--Grid column-->

                        <!--Grid column-->
                        <div class="col-md-5">

                        <!--Body-->
                        <div class="md-form">
                            <i class="fas fa-user prefix"></i>
                            <input type="text" id="orangeForm-name" class="form-control">
                            <label for="orangeForm-name">Your name</label>
                        </div>
                        <div class="md-form">
                            <i class="fas fa-envelope prefix"></i>
                            <input type="text" id="orangeForm-email" class="form-control">
                            <label for="orangeForm-email">Your email</label>
                        </div>

                        <div class="md-form">
                            <i class="fas fa-lock prefix"></i>
                            <input type="password" id="orangeForm-pass" class="form-control">
                            <label for="orangeForm-pass">Your password</label>
                        </div>

                        <div class="text-center">
                            <button class="btn btn-indigo btn-rounded mt-5">Sign up</button>
                        </div>

                        </div>
                        <!--Grid column-->

                    </div>
                    <!--Grid row-->

                    </div>
                </div>

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            </div>
        </div>
        </section>
        <!--Intro Section-->

    </header>
    <!--Main Navigation-->

    <!--  SCRIPTS  -->
    <!-- JQuery -->
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="../js/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="../js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="../js/mdb.min.js"></script>
    <script>
        $(document).ready(() => {
        new WOW().init();
        });
    </script>
    </body>

</html>