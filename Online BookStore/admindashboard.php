<?php
ob_start();
include "include/registration/server.php";
if($_SESSION['admin']==null) {
    header("Location: adminsignin.php");
}
include "functions/function.php";
include "design/admin_header.php";
?>

<main>

    <section class="team-section my-5 ">

        <!-- Section heading -->
        <hr class="my-5">
        <h2 class="h1-responsive font-weight-bold text-center my-5">Welcome Beniamin</h2>
        <p class="grey-text text-center w-responsive mx-auto mb-5">This is our collection so far</p>
        <div class="row text-center text-md-left">

            <?php

            $conn=db_connect();


            $query="SELECT * from book_admin where expire=0";
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
         
                             
								
							
							  <a class=\"btn btn-deep-purple btn-rounded btn-sm\" href='admin_book_detail.php?book_id=".$row['book_id']."'>More</a>
							  <a class=\"btn btn-unique btn-rounded btn-sm\" href='admin_book_edit.php?book_id=".$row['book_id']."'>Edit</a>
							
                    
</div>     
						
                        
                </div>";    //the last two </div> are from previous echo.


            }


            ?>
        </div>
    </section>



</main>









<main>



</main>


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
