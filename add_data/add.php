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
        <form action="add.php">
            <table>
                <tr>
                    <td colspan="2"><h3>User Adding form</h3></td>
                </tr>
                <tr>
                    <td><label for="name">Enter name:</label></td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td><label for="name">Enter Password:</label></td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Add user"></td>
                </tr>
            </table>
        </form>
    </body>
</html>