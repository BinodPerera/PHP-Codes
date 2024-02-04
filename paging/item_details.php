<!-- item_details.php -->
<?php
if(isset($_GET['item_id'])) {
    $itemId = $_GET['item_id'];

    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "LexicalMusic";

    $conn = new mysqli($server, $username, $password, $database);
    if($conn->connect_error){
        die("Connection failed.". $conn->connect_error);
    }

    // Retrieve item details from the database based on the ID
    $sql = "SELECT * FROM item WHERE item_id = $itemId";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // Display full item details
        echo "<h2>".$row["item_name"]."</h2>";
        echo "<p>".$row["item_description"]."</p>";
        // Display other details as needed
    } else {
        echo "Item not found.";
    }
} else {
    echo "Invalid item ID.";
}
$conn->close();
?>
