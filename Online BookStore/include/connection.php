<?php
$servername = "localhost";
$db = "online_book";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>