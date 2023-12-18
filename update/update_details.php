<html>
    <body>
    <?php

        session_start();

        $_SESSION['logged_user_id'] = 4;
        $logged_user_id = $_SESSION['logged_user_id'];

        $conn = new mysqli("localhost", "root", "", "database");

        if($conn->connect_error){
            die("connection failed! " . $conn->connect_error);
        }

        // update name
        if (isset($_POST['updateId']) && isset($_POST['NewName'])) {
            $update_id = $_POST['updateId'];
            $new_name = $_POST['NewName'];

            $updateName = "UPDATE user SET name = ? WHERE id = ?";
            $stmt = $conn->prepare($updateName);
            $stmt->bind_param("si", $new_name, $update_id);
            $stmt->execute();
            $stmt->close();
        }

        // update email
        if (isset($_POST['updateId']) && isset($_POST['NewEmail'])) {
            $update_id = $_POST['updateId'];
            $new_email = $_POST['NewEmail'];

            $updateName = "UPDATE user SET email = ? WHERE id = ?";
            $stmt = $conn->prepare($updateName);
            $stmt->bind_param("si", $new_email, $update_id);
            $stmt->execute();
            $stmt->close();
        }

        $retriveData = "SELECT * FROM user WHERE id = '$logged_user_id'";
        $result = mysqli_query($conn, $retriveData);
        $row = mysqli_fetch_assoc($result);

    ?>
        <h3>user Profile</h3>
        <form method="post">
            <input type="hidden" name="updateId" value="<?php echo $logged_user_id; ?>">

            <label for="name">Name: </label>
            <input type="text" name="NewName" value="<?php echo $row['name']; ?>"> <br>
            <label for="Email">Email: </label>
            <input type="text" name="NewEmail" value="<?php echo $row['email']; ?>"> <br>
            <input type="submit" value="verify">
        </form>
    </body>
</html>

