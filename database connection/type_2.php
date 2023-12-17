<?php

$conn = new mysqli("localhost", "root", "", "database");

if($conn->connect_error){
    die("connection failed! " . $conn->connect_error);
}
else{
    echo "Connection successfull!";
}

?>