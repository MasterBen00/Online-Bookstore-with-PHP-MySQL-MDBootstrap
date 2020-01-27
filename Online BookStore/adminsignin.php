<?php include "include/registration/server.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">

    <style>

        html,
        body,
        header,
        .view {
            height: 100%;
        }

        @media (max-width: 740px) {
            html,
            body,
            header,
            .view {
                height: 1000px;
            }
        }
        @media (min-width: 800px) and (max-width: 850px) {
            html,
            body,
            header,
            .view {
                height: 650px;
            }
        }

        .top-nav-collapse {
            background-color: #3f51b5 !important;
        }

        .navbar:not(.top-nav-collapse) {
            background: transparent !important;
        }

        @media (max-width: 991px) {
            .navbar:not(.top-nav-collapse) {
                background: #3f51b5 !important;
            }
        }

        .rgba-gradient {
            background: -webkit-linear-gradient(45deg, rgba(0, 0, 0, 0.7), rgba(72, 15, 144, 0.4) 100%);
            background: -webkit-gradient(linear, 45deg, from(rgba(0, 0, 0, 0.7), rgba(72, 15, 144, 0.4) 100%)));
            background: linear-gradient(to 45deg, rgba(0, 0, 0, 0.7), rgba(72, 15, 144, 0.4) 100%);
        }

        .card {
            background-color: rgba(126, 123, 215, 0.2);
        }

        .md-form label {
            color: #ffffff;
        }

        h6 {
            line-height: 1.7;
        }
    </style>
</head>

<body>

<!-- Main navigation -->
<header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <strong>HOME</strong>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7" aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent-7">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php#category">Category
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#service">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php#contactus">Support</a>
                    </li>
                </ul>
                <form class="form-inline">
                    <div class="md-form my-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    </div>
                </form>
            </div>
        </div>
    </nav>
    <!-- Navbar -->
    <!-- Full Page Intro -->
    <div class="view" style="background-image: url('img/book7.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
        <!-- Mask & flexbox options-->
        <div class="mask rgba-gradient d-flex justify-content-center align-items-center">
            <!-- Content -->
            <div class="container">
                <!--Grid row-->
                <div class="row mt-5">
                    <!--Grid column-->
                    <div class="col-md-6 mb-5 mt-md-0 mt-5 white-text text-center text-md-left">
                        <h1 class="h1-responsive font-weight-bold wow fadeInLeft" data-wow-delay="0.3s">Welcome Admin! </h1>
                        <hr class="hr-light wow fadeInLeft" data-wow-delay="0.4s">
                        <h6 class="mb-3 wow fadeInLeft" data-wow-delay="0.5s">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem repellendus quasi fuga
                            nesciunt dolorum nulla magnam veniam sapiente, fugiat! Commodi sequi non animi ea
                            dolor molestiae, quisquam iste, maiores. Nulla.</h6>
                        <a class="btn btn-outline-white wow fadeInLeft" data-wow-delay="0.6s">Learn more</a>
                    </div>
                    <!--Grid column-->
                    <!--Grid column-->
                    <div class="col-md-6 col-xl-5 mb-4">
                        <!--Form-->
                        <div class="card wow lightSpeedIn" data-wow-delay="0.8s">
                            <div class="card-body">
                                <!--Header-->
                                <div class="text-center">
                                    <h3 class="white-text">
                                        <i class="fa fa-user white-text"></i> Admin Sign In</h3>
                                    <hr class="hr-light">
                                </div>
                                <!--Body-->
                                <form action="adminsignin.php" method="post">
                                    <?php include "include/registration/errors.php" ?>

                                    <div class="md-form">
                                        <i class="fa fa-user prefix white-text active"></i>
                                        <input type="text" id="form3" class="white-text form-control" name="username">
                                        <label for="form3" class="active">Your name</label>
                                    </div>
                                    <div class="md-form">
                                        <i class="fa fa-lock prefix white-text active"></i>
                                        <input type="password" id="form4" class="white-text form-control" name="password">
                                        <label for="form4">Password</label>
                                    </div>
                                    <div class="text-center mt-4">
                                        <button class="btn btn-indigo btn-rounded" type="submit" name="signin_admin">Sign In</button>

                                    </div>
                                </form>
                            </div>
                        </div>
                        <!--/.Form-->
                    </div>
                    <!--Grid row-->
                </div>
                <!-- Content -->
            </div>
            <!-- Mask & flexbox options-->
        </div>
        <!-- Full Page Intro -->
</header>
<!-- Main navigation -->
<!--Main Layout-->
<main>
</main>
<!-- Main layout -->
<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="js/mdb.min.js"></script>

<script>
    new WOW().init();







</script>

</body>

</html>
