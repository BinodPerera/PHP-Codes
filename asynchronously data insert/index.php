<form id="myForm">
<input type="text" name="f_name" placeholder="first name"><br>
    <input type="text" name="l_name" placeholder="last name"><br>
    <input type="email" name="email" placeholder="email"><br>
    <input type="password" name="pwd" placeholder="password" id="pwd"><br>
    <input type="password" name="c_pwd" placeholder="confirm password" id="c_pwd"><br>
    <button type="button" onclick="submitForm()">Submit</button>
</form>

<script>
    function submitForm() {
        var formData = new FormData(document.getElementById("myForm"));
        var xhr = new XMLHttpRequest();
        
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    document.getElementById("message").innerHTML = xhr.responseText;
                } else {
                    document.getElementById("message").innerHTML = 'Error: ' + xhr.status;
                }
            }
        };
        
        xhr.open("POST", "index.php", true);
        xhr.send(formData);
    }

</script>

<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "database";

$conn = new mysqli($server, $username, $password, $database);

if($conn->connect_error){
    die("connection failed! " . $conn->connect_error);
}

// Fetch data from the form
$name = $_POST['name'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];

// Insert data into the database
$sql = "INSERT INTO user (name, email, password, roll) VALUES ('$name', '$email', '$pwd', 0)";

if ($conn->query($sql) === TRUE) {
    echo "Record inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<div id="message"></div>
