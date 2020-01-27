<?php

function db_connect(){
    $conn = mysqli_connect("localhost", "root", "", "online_book");
    if(!$conn){
        echo "Can't connect database " . mysqli_connect_error($conn);
        exit;
    }
    return $conn;
}





function getbookprice($book_id){
    $conn = db_connect();
    $query = "SELECT price FROM book_admin WHERE book_id = '$book_id'";
    $result = mysqli_query($conn, $query);
    if(!$result){
        echo "get book price failed! " . mysqli_error($conn);
        exit;
    }
    $row = mysqli_fetch_assoc($result);
    return $row['price'];
}








?>