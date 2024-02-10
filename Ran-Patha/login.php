<form action="login.php" method="post">
    <table>
        <tr>
            <td>Username: </td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>Password: </td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td colspan="2"><center><input type="submit" name="loginFormSubmit" value="Login"></center></td>
        </tr>
    </table>
</form>
<?php
    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["loginFormSubmit"])){
        $name = $_REQUEST['name'];
        $password = sha1($_REQUEST['password']);
        echo $password;
    }
?>