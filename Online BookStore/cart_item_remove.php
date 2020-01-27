<?php
ob_start();
session_start();

include "functions/function.php";

$conn = db_connect();


$book_id = $_GET['book_id'];
$amount = $_GET['amount'];
$buyer_id=$_GET['buyer_id'];
if($amount>1){
    $amount=$amount-1;

    $sql3 = "UPDATE order_book SET amount='$amount' WHERE book_id='$book_id' and buyer_id='$buyer_id' and confirm=0";

    $result3 = mysqli_query($conn, $sql3);
}
else{
    header("Location: mycart1.php");

}


header("Location: mycart1.php");