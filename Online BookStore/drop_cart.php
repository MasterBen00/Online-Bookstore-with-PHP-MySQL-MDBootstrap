<?php
ob_start();
require "design/header.php";
include "functions/function.php";
include "include/registration/server.php";
if($_SESSION['username']==null){
    header("Location: signin.php");
}

$conn = db_connect();
$buyer_id = $_GET['buyer_id'];

$sql = "delete from order_book where buyer_id='$buyer_id' and confirm=0";

$result = mysqli_query($conn, $sql);

header("Location: mycart1.php");