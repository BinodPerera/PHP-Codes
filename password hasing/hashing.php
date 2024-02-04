<html>
    <head>
        <title>Password hashing</title>
    </head>
    <body>
        <form action="hashing.php" method="post">
            <table>
                <tr>
                    <td>Enter Password:</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="hash" name="submit"></td>
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

            if($_SERVER["REQUEST_METHOD"]=="POST" && isset($_POST['submit'])){
                $pwd = $_POST['password'];
                echo "<br>Your password is ".$pwd;

                $hashed_pw = sha1($pwd);    //password encypt using sha1 algorithm
                echo "<br>Hashed password is ".$hashed_pw;
            }
        ?>
    </body>
</html>