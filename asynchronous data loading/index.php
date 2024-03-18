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



<form method="post">
    <table>
        <tr>
            <td><label for="sub_category">Insert sub-category:</label></td>
            <td><input type="text" name="sub_cat_name"></td>
        </tr>
        <tr>
            <td><label for="sub_category">select category:</label></td>
            <td><select name="category">
                <?php
                $select = "SELECT * FROM category";
                $run = mysqli_query($conn,$select);
                while($category=$run->fetch_assoc()){
                    echo "<option value=".$category['id'].">".$category['name']."</option>";
                }
                ?>
            </select></td>
        </tr>
        <tr>
            <td colspan="2"><input name="sub_cat_submit" type="submit" value="add"></td>
        </tr>
    </table>
</form>

<a href="?refresh=1">refresh</a>

<?php 
if($_SERVER['REQUEST_METHOD']=='POST' && isset($_POST['sub_cat_submit'])){
    $name = $_REQUEST['sub_cat_name'];
    $category = intval($_REQUEST['category']);

    if(!($name=="")){

        //insert data 
        $insert = "INSERT INTO subCategory(name,category_id) VALUES('$name','$category')";
        $run = mysqli_query($conn, $insert);
        if($run == 1){
            header('Location: index.php');
            echo $name." inserted!";
        }else{
            echo "Error";
        }
    } 
}


?>