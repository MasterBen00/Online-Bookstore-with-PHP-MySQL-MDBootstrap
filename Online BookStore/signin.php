<?php include "include/registration/server.php";
include "functions/function.php";?>
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
        /* Required for full background image */

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
                height: 1100px;
            }
        }
        @media (min-width: 800px) and (max-width: 850px) {
            html,
            body,
            header,
            .view {
                height: 700px;
            }
        }

        .top-nav-collapse {
            background-color: #39448c !important;
        }

        .navbar:not(.top-nav-collapse) {
            background: transparent !important;
        }

        @media (max-width: 991px) {
            .navbar:not(.top-nav-collapse) {
                background: #39448c !important;
            }
        }

        h6 {
            line-height: 1.7;
        }
    </style>

</head>

<body>

<!-- Start your project here-->
<!-- Main navigation -->
<header>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <strong>HOME</strong>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-7"
                    aria-controls="navbarSupportedContent-7" aria-expanded="false" aria-label="Toggle navigation">
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
                <form class="form-inline" action="search.php" method="get">
                    <div class="md-form mt-0">
                        <input class="form-control mr-sm-2" name="search" type="text" placeholder="Search" aria-label="Search">
                    </div>
                </form>
            </div>
        </div>
    </nav>
    <!-- Navbar -->
    <!-- Full Page Intro -->
    <div class="view" style="background-image: url('img/books.jpg'); background-repeat: no-repeat; background-size: cover; background-position: center center;">
        <!-- Mask & flexbox options-->
        <div class="mask rgba-indigo-strong d-flex justify-content-center align-items-center">
            <!-- Content -->
            <div class="container">
                <!--Grid row-->
                <div class="row pt-lg-5 mt-lg-5">
                    <!--Grid column-->
                    <div class="col-md-6 mb-5 mt-md-0 mt-5 white-text text-center text-md-left wow fadeInLeft"
                         data-wow-delay="0.3s">
                        <h1 class="display-4 font-weight-bold">Book Shop</h1>
                        <hr class="hr-light">
                        <h6 class="mb-3">Please sign in to enjoy our service</h6>
                        <a class="btn btn-outline-white">Learn more</a>
                    </div>
                    <!--Grid column-->
                    <!--Grid column-->
                    <div class="col-md-6 col-xl-5 mb-4">
                        <!--Form-->
                        <div class="card wow fadeInRight" data-wow-delay="0.3s">
                            <div class="card-body z-depth-2">
                                <!--Header-->
                                <div class="text-center">
                                    <h3 class="dark-grey-text">
                                        <strong>Sign In</strong>
                                    </h3>
                                    <hr>
                                </div>
                                <form action="signin.php" method="post">
                                    <?php include "include/registration/errors.php" ?>

                                <!--Body-->
                                <div class="md-form">
                                    <i class="fa fa-user prefix grey-text"></i>
                                    <input type="text" id="form3" class="form-control" name="username">
                                    <label for="form3">Your name</label>
                                </div>
                                <div class="md-form">
                                    <i class="fa fa-lock prefix grey-text"></i>
                                    <input type="password" id="form2" class="form-control" name="password">
                                    <label for="form2">Your password</label>
                                </div>
                                <!--Textarea with icon prefix-->
                                <div class="d-flex justify-content-around">
                                    <div>
                                        <!-- Remember me -->
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" id="materialLoginFormRemember">
                                            <label class="form-check-label" for="materialLoginFormRemember">Remember me</label>
                                        </div>
                                    </div>
                                    <div>
                                        <!-- Forgot password -->
                                        <a href="" class="indigo-text">Forgot password?</a>
                                    </div>
                                </div>
                                <div class="text-center mt-3">
                                    <button class="btn btn-indigo btn-rounded" type="submit" name="sign_in">Sign In</button>
                                    <!-- Register -->
                                    <p>Not a member?
                                        <a href="signup.php" class="indigo-text">Register</a>
                                    </p>

                                    <!-- Social login -->
                                    <p>or sign in with:</p>
                                    <a type="button" class="btn-floating btn-fb btn-sm">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                    <a type="button" class="btn-floating btn-tw btn-sm">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                    <a type="button" class="btn-floating btn-li btn-sm">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                    <a type="button" class="btn-floating btn-git btn-sm">
                                        <i class="fa fa-github"></i>
                                    </a>

                                </div>
                              </form>
                            </div>
                        </div>
                        <!--/.Form-->
                    </div>
                    <!--Grid column-->
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
<!-- /Start your project here-->

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
    // Animations initialization
    new WOW().init();
</script>
</body>

</html>
