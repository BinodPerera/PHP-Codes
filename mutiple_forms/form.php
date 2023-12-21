<html>
    <head>
        <title>Multiple Forms</title>
    </head>
    <body>
    <form method="post" action="form.php">
        <!-- Form 1 -->
        <input type="text" name="form1_input1">
        <input type="submit" name="form1_submit" value="Submit Form 1">
    </form>

    <form method="post" action="form.php">
        <!-- Form 2 -->
        <input type="text" name="form2_input1">
        <input type="submit" name="form2_submit" value="Submit Form 2">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['form1_submit'])) {
                $form1_input1 = $_POST['form1_input1'];
                echo "<script>alert('form 1 submitted.');</script>";

            } elseif (isset($_POST['form2_submit'])) {
                $form2_input1 = $_POST['form2_input1'];
                echo "<script>alert('form 2 submitted.');</script>";
            }
        }
    ?>


    </body>
</html>