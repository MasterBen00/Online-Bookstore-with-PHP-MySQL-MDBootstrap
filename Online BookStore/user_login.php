<?php
ob_start();
include "include/registration/server.php";
include "functions/function.php";
if($_SESSION['username']==null){
    header("Location: signin.php");
}?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Book Shop</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

<!-- Start your project here-->

<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark purple-gradient fixed-top navbar-toggleable-md scrolling-navbar">
    <div class="container">



        <!-- Navbar brand -->
        <a class="navbar-brand" href="index.php">Home</a>

        <!-- Collapse button -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav"
                aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Collapsible content -->
        <div class="collapse navbar-collapse" id="basicExampleNav">

            <!-- Links -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="user_login.php">Book Store
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="usedbooks.php">Used Books</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="upload_book.php">Sell Book</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="mycart1.php">My Cart</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="view_order.php">My Order</a>
                </li>



            </ul>
            <!-- Links -->

            <form class="form-inline" action="search.php" method="get">
                <div class="md-form my-0">
                    <input class="form-control mr-sm-2" name="search" type="text" placeholder="Search" aria-label="Search">
                </div>
            </form>

            <a href="logout.php"><button class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3 btn-rounded" name="logout">Log Out</button></a>


        </div>
    </div>
    <!-- Collapsible content -->

</nav>
<!--/.Navbar-->


<main>

    <section class="team-section my-5 ">

        <!-- Section heading -->
        <hr class="my-5">
        <h2 class="h1-responsive font-weight-bold text-center my-5">Our Amazing Collection</h2>
        <p class="grey-text text-center w-responsive mx-auto mb-5">This is our collection so far</p>
        <div class="row text-center text-md-left">

            <?php


            // Create connection
            $conn = db_connect();


            $query="SELECT * from book_admin";
            $result=mysqli_query($conn, $query);
            $c=0;
            while($row=mysqli_fetch_array($result))

            {
                $c++;
                $a=$row['book_id'];
                $query1="SELECT left (description , 90) from book_admin where book_id='$a'";
                $result1=mysqli_query($conn, $query1);
                $row1=mysqli_fetch_array($result1);

                if($c==4){
                    echo " <hr class=\"my-5 blue-gradient col-md-8 \"> ";
                    $c=1;

                }


                echo "
                        <div class=\"col-xl-4 col-lg-12 mb-5 d-md-flex my-3 wow rollIn justify-content-start\">
      <div class=\"avatar mb-md-0 mb-4 mx-4\">
        <img style=\"height: 210px; width: 150px\" src=\"assets/images/".$row['image']."\" class=\"rounded z-depth-1\" alt=\"Sample avatar\">
      </div>
                               <div class=\"mx-4\">
        <h4 class=\"font-weight-bold mb-3\">".$row['title']."</h4>
        <h6 class=\"font-weight-bold grey-text mb-3\">".$row['author']."</h6>
        
        <p class=\"grey-text\">".$row1[0]."</p>
         
                             
								
							
							  <a class=\"btn-floating btn-md blue-gradient\" href='book_detail.php?book_id=".$row['book_id']."'><i class=\"fa fa-file-pdf-o\"></i></a>
							
                    <a class=\"btn-floating btn-md peach-gradient\" href='cart.php?book_id=".$row['book_id']."'><i class=\"fa fa-shopping-cart\" aria-hidden=\"true\"></i></a>
</div>     
						
                        
                </div>";    //the last two </div> are from previous echo.


            }


            ?>
        </div>
    </section>

    <!-- <p class=\"grey-text\">".$row1[0]."</p>-->




</main>


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
    new WOW().init();
</script>
</body>

</html>
