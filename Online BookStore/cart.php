<?php
ob_start();
session_start();
require "functions/function.php";
$conn=db_connect();

if(isset($_GET['book_id'])){
    $book_id = $_GET['book_id'];

    $username=$_SESSION['username'];
    $sql = "SELECT id FROM registration where username='$username'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    $buyer_id=$row["id"];


    $result5 = $conn->query("SELECT order_id FROM order_book WHERE book_id='$book_id' and buyer_id='$buyer_id' and confirm=0");
    if($result5->num_rows == 0) {
        // row not found, do stuff...
        $sql1 = "insert into order_book (book_id, buyer_id, amount, confirm ) values ('$book_id' , '$buyer_id', '1', 0)";
        $result1 = mysqli_query($conn, $sql1);

    }
    else {
        // do other stuff...
        $sql6 = "SELECT amount FROM order_book WHERE book_id='$book_id' and buyer_id='$buyer_id' and confirm=0";
        $result6 = mysqli_query($conn, $sql6);
        $row6 = mysqli_fetch_assoc($result6);
        $amount=$row6["amount"];
        $amount=$amount+1;

        $sql3 = "UPDATE order_book SET amount='$amount' WHERE book_id='$book_id' and buyer_id='$buyer_id' and confirm=0";

        $result3 = mysqli_query($conn, $sql3);

    }



}

header("Location: mycart1.php");

?>

