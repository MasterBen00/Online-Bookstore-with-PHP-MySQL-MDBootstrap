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
<div class="row mt-xl-5">

</div>

<div class="row justify-content-center">
    <h2>Book Orders</h2>
</div>
<div class="container">
    <table class="table table-striped">
    <thead>
    <tr>
        <th scope="col">Name</th>
        <th scope="col">Phone Number</th>
        <th scope="col">Book Title</th>
        <th scope="col">Price</th>
        <th scope="col">Amount</th>
    </tr>
    </thead>
    <tbody>



<?php

$conn = db_connect();

$price=0;
$sql = "SELECT distinct buyer_id FROM order_book where confirm=1";
$result = mysqli_query($conn, $sql);
while($row=mysqli_fetch_array($result)){
    $buyer_id=$row["buyer_id"];
    $sql1= " select username, phone_number from registration where id='$buyer_id'";
    $result1 = mysqli_query($conn, $sql1);
    $row1=mysqli_fetch_array($result1);



    $query = "select book_id, amount from order_book where buyer_id='$buyer_id' and confirm=1";
    $result2 = mysqli_query($conn, $query);
    while($row2=mysqli_fetch_array($result2)){

        $bid = $row2['book_id'];
        $amount=$row2['amount'];



        $query2=" select * from book_admin where book_id='$bid' ";
        $result3 = mysqli_query($conn, $query2);
        $row3=mysqli_fetch_array($result3);
        $price+=getbookprice($bid)*$amount;
        echo "
               <tr>
      <th scope=\"row\">".$row1['username']."</th>
      <td>".$row1['phone_number']."</td>
      <td>".$row3['title']."</td>
      <td>".$row3['price']."</td>
      <td>".$row2['amount']."</td>
    </tr>
        
        ";

    }
}

?>
</tbody>
</table>
</div>
<div class="row container mt-xl-5 justify-content-center">

    <div class="col-md-2">
        <h2>Total</h2>
    </div>
    <div class="col-md-2">
        <h2><strong><?php echo '$'.$price  ?></strong></h2>
    </div>
</div>