<form action="admin.php" method="post" enctype="multipart/form-data">
    <table>
        <tr>
            <td>Name: </td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr> 
            <td>Company: </td>
            <td><input type="text" name="company"></td>
        </tr>
        <tr>
            <td>Description: </td>
            <td><textarea name="description" cols="30" rows="10"></textarea></td>
        </tr>
        <tr>
            <td>image: </td>
            <td><input type="file" name="image"></td>
        </tr>
        <tr>
            <td><input type="submit" value="Publish" name="addAdvertistment"></td>
            <td></td>
        </tr>
    </table>
</form>

