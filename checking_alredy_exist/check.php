<html>
    <head>
        <title>checking</title>
    </head>
    <body>
        <form action="check.php" method="post">
            <table>
                <tr>
                    <td>Enter Email:</td>
                    <td><input type="email" name="email"></td>
                </tr>
                <tr>
                    <td colspan="2"><center><input type="submit" name="submit" value="Check"></center></td>
                </tr>
            </table>
        </form>

        <?php 
            $server = "localhost";
            $username = "root";
            $password = "";
            $database = "database";

            $conn = new mysqli( $server, $username, $password, $database);

            if($conn->connect_error){
                die ("Connection failed!".$conn->connect_error);
            }

            if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['submit'])){
                $email = $_REQUEST['email'];

                $select_email = "SELECT * FROM user WHERE email = '$email'";
                $get_email = mysqli_query($conn, $select_email);
                $count = $get_email->num_rows;
                echo $count;
            }
        ?>

    </body>
</html>