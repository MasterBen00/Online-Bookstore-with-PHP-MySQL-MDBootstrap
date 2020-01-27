<?php
ob_start();
session_start();

$book_id = $_GET['book_id'];
require_once "functions/function.php";


$conn = db_connect();
$query = "delete from book WHERE book_id = '$book_id'";
$result = mysqli_query($conn, $query);

if(!$result){
    echo "Can't retrieve data " . mysqli_error($conn);
    exit;
}
else{
    header("Location: myupload_history.php");
}