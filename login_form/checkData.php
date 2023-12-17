<?php

$conn = new mysqli("localhost", "root", "", "database");

if($conn->connect_error){
    die("connection failed! " . $conn->connect_error);
}

$email = $_REQUEST['email'];
$pwd = $_REQUEST['pwd'];


$retriveData = "SELECT * FROM user WHERE email = '$email'";
$result = mysqli_query($conn, $retriveData);
$row = mysqli_fetch_assoc($result);

if($row['password'] == $pwd){
    echo "logged!";
}

?>