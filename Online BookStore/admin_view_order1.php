<?php
ob_start();
session_start();
require "design/admin_header.php";
include "functions/function.php";
include "include/registration/server.php";
if($_SESSION['admin']==null){
    header("Location: adminsignin.php");
}
?>
<div class="row mt-lg-5 wow zoomIn fast">
    <div class="container">
        <div class="row mt-lg-5">
            <div class="col-md-12">
                <div class="card">
                    <h3 class="card-header text-center font-weight-bold text-uppercase py-4">Total pending Order</h3>
                    <div class="card-body">
                        <div id="table" class="table-editable">

                            <table class="table table-bordered table-responsive-md table-striped text-center">
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Phone Number</th>
                                    <th scope="col">Book Title</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Amount</th>
                                    <th class="text-center">Confirm Order</th>
                                </tr>

<?php

$conn = db_connect();

$price=0;
$sql = "SELECT distinct buyer_id FROM order_book where confirm=1";
$result = mysqli_query($conn, $sql);
while($row=mysqli_fetch_array($result)) {
    $buyer_id = $row["buyer_id"];
    $sql1 = " select username, phone_number from registration where id='$buyer_id'";
    $result1 = mysqli_query($conn, $sql1);
    $row1 = mysqli_fetch_array($result1);


    $query = "select book_id, amount from order_book where buyer_id='$buyer_id' and confirm=1";
    $result2 = mysqli_query($conn, $query);
    while ($row2 = mysqli_fetch_array($result2)) {

        $bid = $row2['book_id'];
        $amount = $row2['amount'];


        $query2 = " select * from book_admin where book_id='$bid' ";
        $result3 = mysqli_query($conn, $query2);
        $row3 = mysqli_fetch_array($result3);
        $price += getbookprice($bid) * $amount;

        echo "
        <tr>
          <td class=\"pt-3-half\" contenteditable=\"true\">".$row1['username']."</td>
          <td class=\"pt-3-half\" contenteditable=\"true\">".$row1['phone_number']."</td>
          <td class=\"pt-3-half\" contenteditable=\"true\">".$row3['title']."</td>
          <td class=\"pt-3-half\" contenteditable=\"true\">".$row3['price']."</td>
          
          <td class=\"pt-3-half\" contenteditable=\"true\">".$row2['amount']."</td>
           <td>
            <a href='admin_confirm_order.php?buyer_id=$buyer_id'><button type=\"button\" class=\"btn btn-success btn-rounded btn-sm my-0\">Confirm</button></a>
          </td>
        </tr>
        ";

    }
}
?>
                        </div>
                    </div>
                </div>
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
