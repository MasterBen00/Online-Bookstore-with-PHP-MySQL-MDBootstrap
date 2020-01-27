<?php
ob_start();
session_start();

$book_id = $_GET['book_id'];
$seller_id = $_GET['seller_id'];
require_once "functions/function.php";


$conn = db_connect();
$query = "update book set expire=1 WHERE book_id = '$book_id'";
$result = mysqli_query($conn, $query);
$query1 = "update sells set expire=1 WHERE book_id = '$book_id' and seller_id='$seller_id'";
$result1 = mysqli_query($conn, $query1);
if(!$result && !$result1){
    echo "Can't retrieve data " . mysqli_error($conn);
    exit;
}
else{
    header("Location: myupload.php");
}