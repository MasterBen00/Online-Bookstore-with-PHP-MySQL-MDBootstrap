<?php
ob_start();
session_start();
require "design/header1.php";
include "functions/function.php";
include "include/registration/server.php";
if($_SESSION['username']==null){
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
                <th scope="col">Book Title</th>
                <th scope="col">Price</th>
                <th scope="col">Amount</th>
            </tr>
            </thead>
            <tbody>



<?php

$conn = db_connect();
$price=0;
$username=$_SESSION['username'];
$sql = "SELECT id FROM registration where username='$username'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$buyer_id=$row["id"];

$query = "select book_id, amount from order_book where buyer_id='$buyer_id' and confirm=1";
$result2 = mysqli_query($conn, $query);

while($row2=mysqli_fetch_array($result2)) {

    $bid = $row2['book_id'];
    $amount=$row2['amount'];
    $query2=" select * from book_admin where book_id='$bid' ";
    $result3 = mysqli_query($conn, $query2);
    $row3=mysqli_fetch_array($result3);
    $price+=getbookprice($bid)*$amount;

    echo "
               <tr>
      
      <td>".$row3['title']."</td>
      <td>".$row3['price']."</td>
      <td>".$row2['amount']."</td>
    </tr>
        
        ";

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