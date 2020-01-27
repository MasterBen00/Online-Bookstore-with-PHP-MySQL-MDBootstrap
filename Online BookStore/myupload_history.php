<?php
ob_start();
session_start();
if($_SESSION['username']==null){
    header("Location: signin.php");
}
require "design/header.php";

?>
    <main>

        <section class="team-section my-5 ">

            <!-- Section heading -->
            <hr class="my-5">
            <h2 class="h1-responsive font-weight-bold text-center my-5">Your Sold Books</h2>
            <p class="grey-text text-center w-responsive mx-auto mb-5">This is our present collection</p>
            <div class="row text-center text-md-left">

<?php
require "functions/function.php";

$conn = db_connect();
$name=$_SESSION['username'];

$sql = "select id from registration where username='$name'";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$temp = $row['id'];
$temp1 = $row['id'];

$sql = "select book_id from sells where seller_id='$temp' and expire!=0";

$result = mysqli_query($conn, $sql);
while($row=mysqli_fetch_array($result)) {
    $temp = $row['book_id'];
    $sql1 = "select * from book where book_id='$temp'";
    $result1 = mysqli_query($conn, $sql1);
    $query5="SELECT left (description , 90) from book where book_id='$temp'";
    $result5=mysqli_query($conn, $query5);
    $row5=mysqli_fetch_array($result5);

    $row1 = mysqli_fetch_array($result1);



    echo "
                        <div class=\"col-xl-4 col-lg-12 mb-5 d-md-flex my-3 wow rollIn  justify-content-start\">
      <div class=\"avatar mb-md-0 mb-4 mx-4\">
        <img style=\"height: 210px; width: 150px\" src=\"assets/images/".$row1['image']."\" class=\"rounded z-depth-1\" alt=\"Sample avatar\">
      </div>
                               <div class=\"mx-4\">
        <h4 class=\"font-weight-bold mb-3\">".$row1['title']."</h4>
        <h6 class=\"font-weight-bold grey-text mb-3\">".$row1['author']."</h6>
        
        <p class=\"grey-text\">".$row5[0]."</p>
         
                             
								
							
							  <a class=\"btn btn-secondary btn-rounded btn-sm\" href='usedbook_detail.php?book_id=$temp'>More</a>
							<a class=\"btn btn-danger btn-rounded btn-sm\" href='myupload_delete_permanent.php?book_id=$temp&amp;seller_id=$temp1'>del</a>
                   
</div>     
						
                        
                </div>";    //the last two </div> are from previous echo.



}


?>
            </div>
        </section>



    </main>

<?php

require "design/footer.php";