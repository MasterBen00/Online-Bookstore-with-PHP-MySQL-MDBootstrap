<?php
ob_start();
session_start();
require "design/admin_header.php";
include "functions/function.php";
include "include/registration/server.php";
if($_SESSION['admin']==null){
    header("Location: adminsignin.php");
}
$conn = db_connect();
$buyer_id = $_GET['buyer_id'];
$sql = "update order_book set confirm=2 where buyer_id='$buyer_id' and confirm=1";
$result = mysqli_query($conn, $sql);

header("Location: admin_view_order1.php");
