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
        .view {
            background: url("img/books.jpg")no-repeat center center;
            background-size: cover;
        }

        .navbar {
            background-color: transparent;
        }

        .top-nav-collapse {
            background-color: #1C2331;
        }

        @media only screen and (max-width: 768px) {
            .navbar {
                background-color: #1C2331;
            }
        }

        html,
        body,
        header,
        .view {
            height: 100%;
        }
    </style>
</head>

<body>

<!-- Start your project here-->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
    <div class="container">

        <!-- Brand -->
        <a class="navbar-brand wow fadeInLeft" data-wow-delay="1.1s" href="#">
            <strong>HOME</strong>
        </a>

        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <!-- Left -->
            <ul class="navbar-nav mr-auto smooth-scroll">
                <li class="nav-item active">
                    <a class="nav-link wow fadeInLeft" data-wow-delay=".9s" href="#category">Category
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link wow fadeInLeft" data-wow-delay=".7s" href="#service">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link wow fadeInLeft" data-wow-delay=".5s" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link wow fadeInLeft" data-wow-delay=".3s" href="#contactus">Support</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link wow fadeInLeft" data-wow-delay=".3s" href="admindashboard.php">Admin Panel</a>
                </li>
            </ul>

            <!-- Right -->
            <ul class="navbar-nav nav-flex-icons">
                <li class="nav-item">
                    <a href="https://www.facebook.com/mdbootstrap" class="nav-link" target="_blank">
                        <i class="fa fa-facebook"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="https://twitter.com/MDBootstrap" class="nav-link" target="_blank">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="signin.php" class="nav-link border border-light rounded wow fadeInRight" data-wow-delay=".3s">
                        <i class="fa fa-sign-in mr-2"></i>Sign In
                    </a>
                </li>
                <li class="nav-item">
                    <a href="signup.php" class="nav-link border border-light rounded wow fadeInRight mx-1" data-wow-delay=".5s">
                        <i class="fa fa-user mr-2"></i>Sign Up
                    </a>
                </li>
            </ul>

        </div>

    </div>
</nav>
<!-- Navbar -->
<!--Carousel Wrapper-->
<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">

    <!--Indicators-->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-1z" data-slide-to="1"></li>
        <li data-target="#carousel-example-1z" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->

    <!--Slides-->
    <div class="carousel-inner" role="listbox">

        <!--First slide-->
        <div class="carousel-item active">
            <div class="view jarallax" style="background-image: url('img/book4.jpg'); background-repeat: no-repeat; background-size: cover;">

                <div class="mask rgba-black-strong">

                    <div class="container-fluid d-flex align-items-center justify-content-center h-100">

                        <div class="row d-flex justify-content-center text-center">

                            <div class="col-md-10">

                                <!-- Heading -->
                                <h2 class="display-4 font-weight-bold white-text pt-5 mb-2 wow fadeInDown" data-wow-delay=".3s" >Book Shop</h2>

                                <!-- Divider -->
                                <hr class="hr-light wow fadeInRight" data-wow-delay=".4s">

                                <!-- Description -->
                                <h4 class="white-text my-4 wow fadeInLeft " data-wow-delay=".5s">Get your favourite books in just a second</h4>
                                <a href="user_login.php" class="btn btn-outline-white wow fadeInUp" data-wow-delay=".8s">
                                    <i class="fa fa-book mr-2"></i>View Books
                                </a>
                            </div>

                        </div>

                    </div>

                </div>


            </div>
        </div>
        <!--/First slide-->

        <!--Second slide-->
        <div class="carousel-item">
            <div class="view " style="background-image: url('img/book8.jpg'); background-repeat: no-repeat; background-size: cover;">

                <div class="mask rgba-black-strong">

                    <div class="container-fluid d-flex align-items-center justify-content-center h-100">

                        <div class="row d-flex justify-content-center text-center">

                            <div class="col-md-10">

                                <!-- Heading -->
                                <h2 class="display-4 font-weight-bold white-text pt-5 mb-2 wow fadeInDown" data-wow-delay=".3s" >Book Shop</h2>

                                <!-- Divider -->
                                <hr class="hr-light wow fadeInRight" data-wow-delay=".4s">

                                <!-- Description -->
                                <h4 class="white-text my-4 wow fadeInLeft " data-wow-delay=".5s">Get your favourite books in just a second</h4>
                                <a href="user_login.php" class="btn btn-outline-white wow fadeInUp" data-wow-delay=".8s">
                                    <i class="fa fa-book mr-2"></i>View Books
                                </a>
                            </div>

                        </div>

                    </div>

                </div>


            </div>
        </div>
        <!--/Second slide-->

        <!--Third slide-->
        <div class="carousel-item">
            <div class="view " style="background-image: url('img/book12.jpg'); background-repeat: no-repeat; background-size: cover;">

                <div class="mask rgba-black-strong">

                    <div class="container-fluid d-flex align-items-center justify-content-center h-100">

                        <div class="row d-flex justify-content-center text-center">

                            <div class="col-md-10">

                                <!-- Heading -->
                                <h2 class="display-4 font-weight-bold white-text pt-5 mb-2 wow fadeInDown" data-wow-delay=".3s" >Book Shop</h2>

                                <!-- Divider -->
                                <hr class="hr-light wow fadeInRight" data-wow-delay=".4s">

                                <!-- Description -->
                                <h4 class="white-text my-4 wow fadeInLeft " data-wow-delay=".5s">Get your favourite books in just a second</h4>
                                <a href="user_login.php" class="btn btn-outline-white wow fadeInUp" data-wow-delay=".8s">
                                    <i class="fa fa-book mr-2"></i>View Books
                                </a>
                            </div>

                        </div>

                    </div>

                </div>


            </div>
        </div>
        <!--/Third slide-->

    </div>
    <!--/.Slides-->

    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->

</div>
<!--/.Carousel Wrapper-->

<!-- /Start your project here-->





<main class="mt-5">
    <div class="container">


        <!--Section: Best Features-->
        <!--Section: Best Features-->

        <hr class="my-5">

        <!--Section: Examples-->
        <section id="category" class="text-center">

            <h1 class="mb-5 font-weight-bold wow fadeInDown" data-wow-delay=".5s">Books Category</h1>

            <!--Grid row-->
            <div class="row d-flex justify-content-center mb-4">

                <!--Grid column-->
                <div class="col-md-8">

                    <!-- Description -->
                    <p>Choice is yours Sir</p>

                </div>
                <!--Grid column-->

            </div>

            <!-- Grid row -->
            <div class="row h-25 mb-5">

                <!-- Grid column -->
                <div class="col-lg-3 col-md-6 mb-lg-0 mb-4 wow rotateInDownLeft">
                    <!-- Collection card -->
                    <div class="card collection-card z-depth-1-half">
                        <!-- Card image -->
                        <div class="view zoom">
                            <img src="img/detective.jpg" class="img-fluid"
                                 alt="">
                            <div class="stripe dark">
                                <a href="category.php?cat=detective">
                                    <p>Detective
                                        <i class="fa fa-angle-right"></i>
                                    </p>
                                </a>
                            </div>
                        </div>
                        <!-- Card image -->
                    </div>
                    <!-- Collection card -->
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-3 col-md-6 mb-lg-0 mb-4 wow rotateInDownLeft">
                    <!-- Collection card -->
                    <div class="card collection-card z-depth-1-half">
                        <!-- Card image -->
                        <div class="view zoom">
                            <img src="img/adventure.jpg" class="img-fluid"
                                 alt="">
                            <div class="stripe light">
                                <a href="category.php?cat=adventure">
                                    <p>Adventure
                                        <i class="fa fa-angle-right"></i>
                                    </p>
                                </a>
                            </div>
                        </div>
                        <!-- Card image -->
                    </div>
                    <!-- Collection card -->
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-3 col-md-6 mb-md-0 mb-4 wow rotateInDownRight ">
                    <!-- Collection card -->
                    <div class="card collection-card z-depth-1-half">
                        <!-- Card image -->
                        <div class="view zoom">
                            <img src="img/thriller.jpg" class="img-fluid"
                                 alt="">
                            <div class="stripe dark">
                                <a href="category.php?cat=thriller">
                                    <p>Thriller
                                        <i class="fa fa-angle-right"></i>
                                    </p>
                                </a>
                            </div>
                        </div>
                        <!-- Card image -->
                    </div>
                    <!-- Collection card -->
                </div>
                <!-- Grid column -->

                <!-- Fourth column -->
                <div class="col-lg-3 col-md-6 wow rotateInDownRight ">
                    <!-- Collection card -->
                    <div class="card collection-card z-depth-1-half">
                        <!-- Card image -->
                        <div class="view zoom">
                            <img src="img/mysterious.jpg" class="img-fluid"
                                 alt="">
                            <div class="stripe light">
                                <a href="category.php?cat=mysterious">
                                    <p>Mysterious
                                        <i class="fa fa-angle-right"></i>
                                    </p>
                                </a>
                            </div>
                        </div>
                        <!-- Card image -->
                    </div>
                    <!-- Collection card -->
                </div>
                <!-- Fourth column -->

            </div>

            <hr>
            <!-- Grid row -->
            <div class="row h-25 my-5">

                <!-- Grid column -->
                <div class="col-lg-3 col-md-6 mb-lg-0 mb-4 wow rotateInUpLeft ">
                    <!-- Collection card -->
                    <div class="card collection-card z-depth-1-half">
                        <!-- Card image -->
                        <div class="view zoom">
                            <img src="img/educational.jpg" class="img-fluid"
                                 alt="">
                            <div class="stripe dark">
                                <a href="category.php?cat=educational">
                                    <p>Education
                                        <i class="fa fa-angle-right"></i>
                                    </p>
                                </a>
                            </div>
                        </div>
                        <!-- Card image -->
                    </div>
                    <!-- Collection card -->
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-3 col-md-6 mb-lg-0 mb-4 wow rotateInUpLeft ">
                    <!-- Collection card -->
                    <div class="card collection-card z-depth-1-half">
                        <!-- Card image -->
                        <div class="view zoom">
                            <img src="img/sciencefc.jpg" class="img-fluid"
                                 alt="">
                            <div class="stripe light">
                                <a href="category.php?cat=science fiction">
                                    <p>Science Fiction
                                        <i class="fa fa-angle-right"></i>
                                    </p>
                                </a>
                            </div>
                        </div>
                        <!-- Card image -->
                    </div>
                    <!-- Collection card -->
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-lg-3 col-md-6 mb-md-0 mb-4 wow rotateInUpRight ">
                    <!-- Collection card -->
                    <div class="card collection-card z-depth-1-half">
                        <!-- Card image -->
                        <div class="view zoom">
                            <img src="img/horror.jpg" class="img-fluid"
                                 alt="">
                            <div class="stripe dark">
                                <a href="category.php?cat=horror">
                                    <p>Horror
                                        <i class="fa fa-angle-right"></i>
                                    </p>
                                </a>
                            </div>
                        </div>
                        <!-- Card image -->
                    </div>
                    <!-- Collection card -->
                </div>
                <!-- Grid column -->

                <!-- Fourth column -->
                <div class="col-lg-3 col-md-6 wow rotateInUpRight ">
                    <!-- Collection card -->
                    <div class="card collection-card z-depth-1-half">
                        <!-- Card image -->
                        <div class="view zoom">
                            <img src="img/romance.jpg" class="img-fluid"
                                 alt="">
                            <div class="stripe light">
                                <a href="category.php?cat=romance">
                                    <p>Romantic
                                        <i class="fa fa-angle-right"></i>
                                    </p>
                                </a>
                            </div>
                        </div>
                        <!-- Card image -->
                    </div>
                    <!-- Collection card -->
                </div>
                <!-- Fourth column -->

            </div>











        </section>
        <!--Section: Examples-->

        <hr class="my-5">

        <section id="service" class="text-center wow fadeIn slow">

            <!-- Heading -->
            <h2 class="mb-5 font-weight-bold">At Your Service</h2>
            <hr class="my-5 red col-md-3 p-1">

            <!--Grid row-->
            <div class="row d-flex justify-content-center mb-4">

                <!--Grid column-->
                <div class="col-md-8">

                    <!-- Description -->
                    <p>These are out best services</p>

                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

            <!--Grid row-->
            <div class="row">

                <!--Grid column-->
                <div class="col-md-4 mb-1">
                    <i class="fa fa-paper-plane fa-5x red-text wow lightSpeedIn"></i>
                    <h4 class="my-4 font-weight-bold">Ready to Ship</h4>
                    <p>We provide our services all over the world</p>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-4 mb-1">
                    <i class="fa fa-upload fa-5x red-text wow lightSpeedIn"></i>
                    <h4 class="my-4 font-weight-bold">Be a seller</h4>
                    <p>You can sell your own book</p>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-4 mb-1">
                    <i class="fa fa-book fa-5x red-text wow lightSpeedIn"></i>
                    <h4 class="my-4 font-weight-bold">Rich Collection</h4>
                    <p>You can find your desired books</p>
                </div>
                <!--Grid column-->

            </div>
            <!--Grid row-->

        </section>

        <hr class="my-5">

        <section id="about" class="text-center wow fadeInDown">

            <h2 class="mb-5 font-weight-bold">We've got what you have always wanted</h2>

            <div class="row d-flex justify-content-center mb-4">

                <!--Grid column-->
                <div class="col-md-10">

                    <!-- Description -->
                    <p>This website is your own online book store which consists of all the varieties of books you
                        wanted to read. In this website you can afford to buy your favourite books and get them
                        at your doorstep. We are willing to provide you the best service possible. There is no
                        friend as loyal as book.
                        A book shop is a place where different kinds of textbooks or reference books are sold.
                        It is a very important place for all educated persons. Most of the customers of the book
                        shop are book lovers of the all ages. It is mostly familiar to the students. Generally a
                        book shop is seen beside any educational institutions like – school, college or university.
                        Beside them, it is also found in a stationary market place. In a book shop there are
                        different shelves which are nicely arranged. It is seen that the books are categorized
                        according to the types. From a book shop, we can buy our text books, story books,
                        novels, dictionaries, science fiction books, pens, pencils, rubbers, rulers etc.
                        We can also get binding paper, color paper, graph paper, and hand notes on different
                        publishers. Generally in a book shop, there are a manager and one or two booksellers
                        who always serve the customers. In fact, a book shop always plays an important role
                        for the readers and mostly the students</p>

                </div>
                <!--Grid column-->

            </div>






        </section>








        <!--Section: Contact-->

        <!--Section: Contact v.2-->

        <hr class="my-5">
        <section id="contactus" class="mb-4 wow rotateIn slow">

            <!--Section heading-->
            <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
            <!--Section description-->
            <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
                a matter of hours to help you.</p>

            <div class="row">

                <!--Grid column-->
                <div class="col-md-9 mb-md-0 mb-5">
                    <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="name" name="name" class="form-control">
                                    <label for="name" class="">Your name</label>
                                </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="email" name="email" class="form-control">
                                    <label for="email" class="">Your email</label>
                                </div>
                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <input type="text" id="subject" name="subject" class="form-control">
                                    <label for="subject" class="">Subject</label>
                                </div>
                            </div>
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-12">

                                <div class="md-form">
                                    <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                    <label for="message">Your message</label>
                                </div>

                            </div>
                            <button type="submit" class="btn btn-primary" name="send_message_btn">Send</button>
                        </div>
                        <!--Grid row-->

                    </form>

                    <div class="text-center text-md-left">

                        <!--<a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>-->
                    </div>
                    <div class="status"></div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-3 text-center">
                    <ul class="list-unstyled mb-0">
                        <li><i class="fa fa-map-marker fa-2x"></i>
                            <p>Dhaka, Bangladesh</p>
                        </li>

                        <li><i class="fa fa-phone mt-4 fa-2x"></i>
                            <p>+880 1521 436 897</p>
                        </li>

                        <li><i class="fa fa-envelope mt-4 fa-2x"></i>
                            <p>itsbaniamin@gmail.com</p>
                        </li>
                    </ul>
                </div>
                <!--Grid column-->

            </div>

        </section>
        <!--Section: Contact v.2-->

    </div>



</main>


<!-- Footer -->
<!-- Footer -->
<footer class="page-footer font-small stylish-color-dark pt-4 wow fadeInUp" data-wow-delay=".5s">

    <!-- Footer Links -->
    <div class="container text-center text-md-left">

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-md-4 mx-auto">

                <!-- Content -->
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Footer Content</h5>
                <p>Here you can use rows and columns here to organize your footer content. Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit.</p>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none">

            <!-- Grid column -->
            <div class="col-md-2 mx-auto">

                <!-- Links -->
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

                <ul class="list-unstyled">
                    <li>
                        <a href="#!">Link 1</a>
                    </li>
                    <li>
                        <a href="#!">Link 2</a>
                    </li>
                    <li>
                        <a href="#!">Link 3</a>
                    </li>
                    <li>
                        <a href="#!">Link 4</a>
                    </li>
                </ul>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none">

            <!-- Grid column -->
            <div class="col-md-2 mx-auto">

                <!-- Links -->
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

                <ul class="list-unstyled">
                    <li>
                        <a href="#!">Link 1</a>
                    </li>
                    <li>
                        <a href="#!">Link 2</a>
                    </li>
                    <li>
                        <a href="#!">Link 3</a>
                    </li>
                    <li>
                        <a href="#!">Link 4</a>
                    </li>
                </ul>

            </div>
            <!-- Grid column -->

            <hr class="clearfix w-100 d-md-none">

            <!-- Grid column -->
            <div class="col-md-2 mx-auto">

                <!-- Links -->
                <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Links</h5>

                <ul class="list-unstyled">
                    <li>
                        <a href="#!">Link 1</a>
                    </li>
                    <li>
                        <a href="#!">Link 2</a>
                    </li>
                    <li>
                        <a href="#!">Link 3</a>
                    </li>
                    <li>
                        <a href="#!">Link 4</a>
                    </li>
                </ul>

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </div>
    <!-- Footer Links -->

    <hr>

    <!-- Call to action -->
    <ul class="list-unstyled list-inline text-center py-2">
        <li class="list-inline-item">
            <h5 class="mb-1">Register for free</h5>
        </li>
        <li class="list-inline-item">
            <a href="signup.php" class="btn btn-danger btn-rounded">Sign up!</a>
        </li>
    </ul>
    <!-- Call to action -->

    <hr>

    <!-- Social buttons -->
    <ul class="list-unstyled list-inline text-center">
        <li class="list-inline-item">
            <a class="btn-floating btn-fb mx-1">
                <i class="fa fa-facebook"> </i>
            </a>
        </li>
        <li class="list-inline-item">
            <a class="btn-floating btn-tw mx-1">
                <i class="fa fa-twitter"> </i>
            </a>
        </li>
        <li class="list-inline-item">
            <a class="btn-floating btn-gplus mx-1">
                <i class="fa fa-google-plus"> </i>
            </a>
        </li>
        <li class="list-inline-item">
            <a class="btn-floating btn-li mx-1">
                <i class="fa fa-linkedin"> </i>
            </a>
        </li>
        <li class="list-inline-item">
            <a class="btn-floating btn-dribbble mx-1">
                <i class="fa fa-dribbble"> </i>
            </a>
        </li>
    </ul>
    <!-- Social buttons -->



</footer>
<!-- Footer -->
<!-- Footer -->









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





    objectFitImages();

    /* init Jarallax */
    jarallax(document.querySelectorAll('.jarallax'));

    jarallax(document.querySelectorAll('.jarallax-keep-img'), {
        keepImg: true,
    });



</script>
</body>

</html>
