<?php

$conn = new mysqli("localhost", "root", "", "database");

if($conn->connect_error){
    die("connection failed! " . $conn->connect_error);
}

$sql = "SELECT * from user where roll = 0";
$result = mysqli_query($conn, $sql);

?>

<html>
    <head>
        <title>Requests</title>
    </head>
    <body>
        <table>
            <tr>
                <th>Name</th><th>Email</th><th>Roll</th><th>Action</th>
            </tr>
            <?php
                while($row = mysqli_fetch_assoc($result)){
            ?>
            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['roll']; ?></td>
                <td><?php echo "accept<br>decline" ?></td>
            </tr>

            <?php
                }
            ?>
        </table>
    </body>
</html>