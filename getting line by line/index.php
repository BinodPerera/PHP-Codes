<?php 

$conn = new mysqli("localhost", "root", "", "Ranpatha");
if($conn->connect_error){
    die("connection failed! " . $conn->connect_error);
}

?>

<form action="" method="post">
    Enter category id: <input type="number" name="catId"><br>
    Enter your text in here,<br>
    <textarea name="text" cols="30" rows="10"></textarea>
    <input type="submit" value="Genarate" name="submit_button">
</form>
<?php
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['submit_button'])){
    
    

    $text = $_REQUEST["text"];
    $catId = $_REQUEST["catId"];
    $image = "none";
    $icon = "none";
    
    // Split the paragraph into lines
    $lines = explode("\n", $text);

    // Loop through each line and display it
    foreach ($lines as $line) {
        $sql = "INSERT INTO subcategory(name, icon, image, category_id) VALUES('$line', '$icon', '$image', '$catId')";
        if ($conn->query($sql) === TRUE) {
            echo $line . " inserted!<br>";
        }
    }
}
?>