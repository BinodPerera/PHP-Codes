<?php 

$db_server ="localhost";
$db_name = "root";
$db_password = "";
$db_name = "ranpatha_db";

$conn = new mysqli($db_server, $db_name, $db_password, $db_name);

if($conn->connect_error){
    die ("Connection failed!".$conn->connect_error);
}

?>