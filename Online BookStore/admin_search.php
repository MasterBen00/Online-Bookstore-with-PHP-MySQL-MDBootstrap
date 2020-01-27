<?php
ob_start();
require "design/admin_header.php";
require "functions/function.php";
?>


<main>
    <hr>

    <div class='container mt-5'>
        <div class='row'>

            <?php


            // Create connection
            $conn=db_connect();


            if(isset($_GET['search'])) {
                $search_query = $_GET['search'];

                $result = "select * from book_admin where title like '%$search_query%' ";
                $result = mysqli_query($conn, $result);
                while ($row = mysqli_fetch_array($result)) {

                    echo "
                        <div class='col-md-3 d-flex align-items-stretch my-md-4'>
                          <div class=\"card card-cascade narrower\">

  <!-- Card image -->
  <div class=\"view view-cascade overlay\">
    <img style=\"height: 190px; width: 100%\" class='card-img-top ' src='assets/images/".$row['image']."'>
    <a>
      <div class=\"mask rgba-white-slight\"></div>
    </a>
  </div>

  <!-- Card content -->
  <div class=\"card-body card-body-cascade\">

    <!-- Label -->
    <h6 class=\"card-title\"><strong>" . $row['title'] . "</strong></h6>
    <!-- Title -->
    <h7 class=\"blue-text pb-2\"><strong>" . $row['author'] . "</strong></h7>
    <!-- Text -->
   
    <!-- Button -->
     <div class='align-items-center'>
     <a href='admin_book_detail.php?book_id=" . $row['book_id'] . "'><button class='btn btn-outline-default btn-rounded btn-block waves-effect btn-md mt-3'>
	 								Detail 
								</button></a>
</div>

  </div>

</div>
                        
                </div>";    //the last two </div> are from previous echo.


                }
            }


            ?>
        </div>
    </div>






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
</body>

</html>
