<?php
ob_start();
include "design/header.php";
$cat=$_GET['cat'];
echo $cat;
include "include/connection.php";
require_once "functions/function.php";
$conn = db_connect();
$query = "SELECT * FROM book_admin WHERE category = '$cat'";
$result = mysqli_query($conn, $query);

?>

<main>

    <section class="team-section my-5">

        <!-- Section heading -->

        <h2 class="h1-responsive font-weight-bold text-center my-5">Our Amazing Collection</h2>
        <div class="row text-center text-md-left">

            <?php


            $c=0;
            while($row=mysqli_fetch_array($result))

            {
                $c++;
                $a=$row['book_id'];
                $query1="SELECT left (description , 200) from book_admin where book_id='$a'";
                $result1=mysqli_query($conn, $query1);
                $row1=mysqli_fetch_array($result1);

                if($c%2==1){
                    echo " <hr class=\"my-5 blue-gradient col-md-6 \"> ";
                }

                echo "
                        <div class=\"col-xl-6 col-lg-12 mb-5 d-md-flex justify-content-start\">
      <div class=\"avatar mb-md-0 mb-4 mx-4\">
        <img src=\"assets/images/".$row['image']."\" class=\"rounded z-depth-1\" alt=\"Sample avatar\">
      </div>
                               <div class=\"mx-4\">
        <h4 class=\"font-weight-bold mb-3\">".$row['title']."</h4>
        <h6 class=\"font-weight-bold grey-text mb-3\">".$row['author']."</h6>
        <p class=\"grey-text\">".$row1[0]."</p>
                             
								
							
							  <a href='book_detail.php?book_id=".$row['book_id']."'><button class='btn morpheus-den-gradient btn-rounded'>
	 								Read More 
								</button></a>
							
                    
</div>     
						
                        
                </div>";    //the last two </div> are from previous echo.


            }


            ?>
        </div>
    </section>






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
