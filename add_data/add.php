<html>
    <head>
        <title>Insert Data into database</title>

        <?php

        $conn = new mysqli("localhost","root","","database");

        if($conn->connect_error){
            die ("Connection failed!".$conn->connect_error);
        }

        ?>
    </head>
    <body>
        <form action="add.php" method="post">
            <table>
                <tr>
                    <td colspan="2"><h3>User Adding form</h3></td>
                </tr>
                <tr>
                    <td><label for="name">Enter name:</label></td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td><label for="name">Enter Email:</label></td>
                    <td><input type="email" name="email"></td>
                </tr>
                <tr>
                    <td><label for="name">Enter Password:</label></td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td><label for="name">Enter confirm Password:</label></td>
                    <td><input type="password" name="c_password"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="submitButton" value="Add user"></td>
                </tr>
            </table>
        </form>

        <?php

        if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submitButton"])){
            $name = $_REQUEST['name'];
            $email = $_REQUEST['email'];
            $password = $_REQUEST['password'];
            $c_password = $_REQUEST['c_password'];

            $insert_query = "INSERT INTO user(name, email, password) VALUESS('$name','$email','$password')";

            if ($conn->query($insert_query) === TRUE) {
                echo "Record inserted successfully";
            } else {
                echo "Error: " . $isert_query . "<br>" . $conn->error;
            }
        }

        ?>
    </body>
</html>