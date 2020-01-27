<?php
ob_start();
if(!isset($_POST['save_change'])){
    echo "Something wrong!";
    exit;
}

$book_id = trim($_POST['book_id']);
$title = trim($_POST['title']);
$author = trim($_POST['author']);
$descr = trim($_POST['descr']);
$price = floatval(trim($_POST['price']));
$amount = trim($_POST['amount']);
$category = trim($_POST['category']);

if(isset($_FILES['image']) && $_FILES['image']['name'] != ""){
    $image = $_FILES['image']['name'];
    $directory_self = str_replace(basename($_SERVER['PHP_SELF']), '', $_SERVER['PHP_SELF']);
    $uploadDirectory = $_SERVER['DOCUMENT_ROOT'] . $directory_self . "bootstrap/img/";
    $uploadDirectory .= $image;
    move_uploaded_file($_FILES['image']['tmp_name'], $uploadDirectory);
}

include "functions/function.php";
$conn = db_connect();

$query = "UPDATE book_admin SET  
	title = '$title', 
	author = '$author', 
	description = '$descr', 
	price = '$price',
    category = '$category',
    amount = '$amount'";

if(isset($image)){
    $query .= ", book_image='$image' WHERE book_id = '$book_id'";
} else {
    $query .= " WHERE book_id = '$book_id'";
}

$result = mysqli_query($conn, $query);
if(!$result){
    echo "Can't update data " . mysqli_error($conn);
    exit;
} else {
    header("Location: admin_book_edit.php?book_id=$book_id");
}
?>