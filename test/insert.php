<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "LexicalMusic";

$conn = new mysqli($server, $username, $password, $database);
if($conn->connect_error){
    die("Connection failed.". $conn->connect_error);
}

$item_name = $_POST['item_name'] ?? '';
$item_description = $_POST['item_description'] ?? '';
$item_price = $_POST['item_price'] ?? '';
$category_id = $_POST['category_id'] ?? '';
$contact_num = $_POST['contact_num'] ?? '';
$location = $_POST['location'] ?? '';

// Uploading images
//$item_image_1 = $_FILES['item_image_1']['name'] ?? '';
$item_image_1 = uniqid() . "." . pathinfo($_FILES['item_image_1']['name'] ?? '', PATHINFO_EXTENSION);
$item_image_2 = uniqid() . "." . pathinfo($_FILES['item_image_2']['name'] ?? '', PATHINFO_EXTENSION);
$item_image_3 = uniqid() . "." . pathinfo($_FILES['item_image_3']['name'] ?? '', PATHINFO_EXTENSION);

// Move uploaded files to a folder (adjust path accordingly)
$uploadDir = 'uploads/';
move_uploaded_file($_FILES['item_image_1']['tmp_name'], $uploadDir . basename($item_image_1));
move_uploaded_file($_FILES['item_image_2']['tmp_name'], $uploadDir . basename($item_image_2));
move_uploaded_file($_FILES['item_image_3']['tmp_name'], $uploadDir . basename($item_image_3));

$sql = "INSERT INTO item (item_name, item_description, item_price, category_id, contact_num, location, item_image_1, item_image_2, item_image_3) VALUES ('$item_name', '$item_description', '$item_price', '$category_id', '$contact_num', '$location', '$item_image_1', '$item_image_2', '$item_image_3')";

if ($conn->query($sql) === TRUE) {
    echo "Record inserted successfully";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
