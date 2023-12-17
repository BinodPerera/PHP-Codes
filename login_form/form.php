<html>
    <head>
        <title>Form validation</title>
        <script>
            function validation(){
                var email = document.forms["signupform"]["email"].value;
                var pwd = document.forms["signupform"]["pwd"].value;

                if((pwd == "") || (email == "")){
                    alert("Please fill password and email!");
                    return false;
                }
                return true;
            }
        </script>
    </head>
    <body>
        <h3>login form</h3>
        <form action="checkData.php" name="signupform" onsubmit="return validation()" method="post">
            <input type="email" name="email" placeholder="email"><br>
            <input type="password" name="pwd" placeholder="password" id="pwd"><br>
            <input type="submit" value="Login">
        </form>
    </body>
</html>