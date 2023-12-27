<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "LexicalMusic";

$conn = new mysqli($server, $username, $password, $database);
if($conn->connect_error){
    die("Connection failed.". $conn->connect_error);
}

// Fetch items from the database
$sql = "SELECT item_id, item_name FROM item";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Display items as a list
    while($row = $result->fetch_assoc()) {
        echo "<a href='item_details.php?item_id=".$row["item_id"]."'><br>";
        echo $row["item_id"]."-".$row["item_name"]."</a><br>";
    }
} else {
    echo "No items found.";
}
$conn->close();
?>