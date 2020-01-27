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

$sql = "update order_book set confirm=1 where buyer_id='$buyer_id' and confirm=0";

$result = mysqli_query($conn, $sql);

header("Location: order_confirm.php");