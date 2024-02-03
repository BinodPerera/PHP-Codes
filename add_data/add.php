<html>
    <head>
        <title>Insert Data into database</title>
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

        $conn = new mysqli("localhost","root","","database");

        if($conn->connect_error){
            die ("Connection failed!".$conn->connect_error);
        }

        if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submitButton"])){
            $name = $_REQUEST['name'];
            $email = $_REQUEST['email'];
            $password = $_REQUEST['password'];
            $c_password = $_REQUEST['c_password'];
            $count = 0;

            //checking that email alredy in database or not
            // $check_email = "SELECT * FROM user WHERE email == '$email'";
            // $result = $conn->query($check_email);
            // if($result){
            //     $count = $result->num_rows;
            // }
            // else{
            //     $message = "This email alredy registered!";
            // }

            if($password == $c_password){
                //checking both passwords are same or not
                $insert_user = "INSERT INTO user(name, email, password, roll) VALUES('$name','$email','$password',0)";
                if ($conn->query($insert_user) === TRUE) {
                    echo "New user $name added succesfully!";
                } else {
                    echo "Error: " . $insert_user . "<br>" . $conn->error;
                }
            }
            else{
                echo "Please sure that your both passwords need to be same.";
            }

            
        }

        ?>
    </body>
</html>