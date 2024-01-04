<?php

$conn = new mysqli("localhost", "root", "", "database");    // database connection

if($conn->connect_error){    //checking database successfully connected or not.
    die("connection failed! " . $conn->connect_error);
}

$name = strtoupper($_REQUEST['f_name'] ." ". $_REQUEST['l_name']);  //strtoupper functions is used for make strings uppercase letters
$email = $_REQUEST['email'];    //getting email value from html form and assign that value into php variable name '$email'
$pwd = $_REQUEST['pwd'];    //getting pwd value from html form and assign that value into php variable name '$pwd'


$insertData = "INSERT INTO user(name, email, password, roll) VALUES( '$name', '$email', '$pwd', 0)";    // data insert into database using mysqli query

if(mysqli_query($conn, $insertData)){    // checking that mySQL query status using if condition
    echo "data inserted!";    //if data is successfully inserted this line will be displayed.
}

?>
