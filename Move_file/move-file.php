<?php 
    date_default_timezone_set('Asia/Colombo');
    // Get the current date and time in Sri Lanka
    $currentDateTime = new DateTime();

    // Format the date and time as desired
    $currentTimeInSriLanka = $currentDateTime->format('Y-m-d H:i:s');

    // Output the current time in Sri Lanka
    echo "Current time in Sri Lanka: " . $currentDateTime;
?>

<form method="post" enctype="multipart/form-data">
    <label for="file">choose file</label>
    <input type="file" name="image">
    <input type="submit" value="Move" name="file">
</form>

<?php 
    if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['file'])){
        $targetDirectory = "uploads/"; // Directory where uploaded files will be moved
        echo $_FILES["image"]["name"];
        $targetFile = $targetDirectory . basename($_FILES["image"]["name"]);
        
        // Try to move the uploaded file
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
            $file =  basename( $_FILES["image"]["name"]);
            echo $file;
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }