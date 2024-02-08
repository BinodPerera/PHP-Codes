<html>
    <head>
        <title>Admin Panel</title>
    </head>
    <body>
        <form action="admin.php" method="post">
            <select name="add" id="">
                <option value="add_news">Add news</option>
                <option value="add_news_cat">Add news category</option>
                <option value="add_advertistment">Add advertistment</option>
            </select>
            <input type="submit" value="show" name="addButton">
        </form><br>

        <?php 
            if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["addButton"])){
                $request = $_REQUEST['add'];
                if($request=="add_news"){
                    include "pages/add/news.php";
                }
                else if($request=="add_news_cat"){
                    include "pages/add/newsCategory.php";
                }
                else if($request=="add_advertistment"){
                    include "pages/add/advertistment.php";
                }
                else{
                    echo "Error";
                }
            }
        ?>

        <?php
            //advertistment adding request
            if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["addAdvertistment"])){
                include "pages/add/advertistment.php";

                $name = $_REQUEST['name'];
                $company = $_REQUEST['company'];
                $description = $_REQUEST['description'];
                $image = $_FILES['image']['name'];

                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $uploadDir = '../assets/';
                
                    // Check if the 'image' file input exists in the form data
                    if (isset($_FILES['image'])) {
                        $uploadedFile = $_FILES['image'];
                
                        // Check for errors during file upload
                        if ($uploadedFile['error'] === UPLOAD_ERR_OK) {
                            
                            // Ensure it's an image (you can enhance this check based on your needs)
                            $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
                            if (in_array($uploadedFile['type'], $allowedTypes)) {

                                // Move the uploaded file to the desired location
                                $destination = $uploadDir . basename($uploadedFile['name']);
                                if (move_uploaded_file($uploadedFile['tmp_name'], $destination)) {

                                    //adding other data into database
                                    include "db-connection.php";
                                    $insert_add = "INSERT INTO advertistment(name, company, image, user_id, description) VALUES('$name','$company','$image', 28556, '$description')";
                                    if ($conn->query($insert_add) === TRUE) {
                                         echo "Advertistment added successfully!";
                                    } 
                                    else {
                                        echo "row not added!";
                                    }

                                } else {
                                    echo 'Error moving file.';
                                }
                            } else {
                                echo 'Invalid file type. Only JPEG, PNG, and GIF are allowed.';
                            }
                        } else {
                            echo 'Error during file upload.';
                        }
                    } else {
                        echo 'No file uploaded.';
                    }
                }

            }

        ?>

        <form action="admin.php" method="post">
            <select name="edit" id="">
                <option value="edit_news">Edit news</option>
                <option value="edit_news_cat">Edit news category</option>
                <option value="edit_advertistment">Edit advertistment</option>
            </select>
            <input type="submit" value="show" name="editButton">
        </form>

        <?php 
            if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST["editButton"])){
                echo "edit button clicked";
            }
        ?>
    </body>
</html>