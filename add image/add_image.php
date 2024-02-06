<html>
    <head>
        <title>Add image</title>
    </head>
    <body>
        <form action="add_image.php" method="post">
            <label for="image">please select an image </label>
            <input type="file" name="image"><br>
            <input type="submit" value="Add" name="submit">
        </form>
        <?php 

            $conn = new mysqli("localhost","root","","database");

            if($conn->connect_error){
                die ("Connection failed!".$conn->connect_error);
            }

            if($_SERVER["REQUEST_METHOD"]== "POST" && isset($_POST["submit"])){
                echo "Done!";
                $image_data = file_get_contents($_FILES['image']['tmp_name']);
                $image_name = $_FILES['image']['name'];

                echo "lenght: ".strlen($image_name);
            }
        ?>
    </body>
</html>