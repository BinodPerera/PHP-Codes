<?php

$conn = new mysqli("localhost", "root", "", "database");

if($conn->connect_error){
    die("connection failed! " . $conn->connect_error);
}

$name = strtoupper($_REQUEST['f_name'] ." ". $_REQUEST['l_name']);
$email = $_REQUEST['email'];
$pwd = $_REQUEST['pwd'];


$insertData = "INSERT INTO user(name, email, password, roll) VALUES( '$name', '$email', '$pwd', 0)";

if(mysqli_query($conn, $insertData)){
    echo "data inserted!";
}

?>