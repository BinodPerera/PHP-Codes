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