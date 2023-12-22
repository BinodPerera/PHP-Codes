<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "database";

$conn = new mysqli($server, $username, $password, $database);

if($conn->connect_error){
    die("connection failed! " . $conn->connect_error);
}

// Fetch data from the form
$name = $_POST['name'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];

// Insert data into the database
$sql = "INSERT INTO user (name, email, password, roll) VALUES ('$name', '$email', '$pwd', 0)";

if ($conn->query($sql) === TRUE) {
    echo "Record inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
