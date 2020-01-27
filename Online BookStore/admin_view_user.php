<?php
ob_start();
include "include/registration/server.php";
include "functions/function.php";
if($_SESSION['admin']==null) {
    header("Location: adminsignin.php");
}
include "design/admin_header.php";
$conn = db_connect();
$sql = "select * from registration";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>
<div class="row my-xl-5">

</div>
<div class="container">
    <div class="row container justify-content-center my-4">
        <h2 class="wow fadeInRight" data-wow-delay=".9s">User Detail</h2>
    </div>
<div class="row wow rollIn" data-wow-delay=".1s">
    <div class="col-md-12">
<div class="table-wrapper-scroll-y">

    <table class="table table-bordered table-striped table-hover">
        <thead>
        <tr>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Phone Number</th>
        </tr>
        </thead>
        <tbody>

        <?php

          while($row=mysqli_fetch_array($result)) {


              echo "
              
                <tr>
        <th scope=\"row\">".$row['username']."</th>
        <td>".$row['email']."</td>
        <td>".$row['phone_number']."</td>
        
      </tr>
              
              
              ";



          }
          ?>
        </tbody>
    </table>
</div>
</div>

</div>
</div>
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