<?php 

$db_server = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "database1";

$conn = new mysqli($db_server, $db_username, $db_password, $db_name);

if($conn->connect_error){
    die ("error: ".$conn->connect_error);
}else{
    $name = $_REQUEST['name'];
    $tel = $_REQUEST['tel'];

    echo $name."'s telephone number is ".$tel;
}

?>