<?php 
$server = "localhost";
$username = "root";
$password = "";
$database = "database";

$conn = new mysqli($server, $username, $password, $database);

if($conn->connect_error){
    die("connection failed! " . $conn->connect_error);
}

?>



<form method="post">
    <table>
        <tr>
            <td><label for="category">Insert category:</label></td>
            <td><input type="text" name="cat_name"></td>
        </tr>
        <tr>
            <td colspan="2"><input name="cat_submit" type="submit" value="add"></td>
        </tr>
    </table>
</form>

<?php 
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['cat_submit'])){
    $name = $_REQUEST['cat_name'];

    //insert data 
    $insert = "INSERT INTO category(name) VALUES('$name')";
    $run = mysqli_query($conn, $insert);
    
}
?>