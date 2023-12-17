<html>
    <head>
        <title>Form validation</title>
        <script>
            function validation(){
                var f_name = document.forms["signupform"]["f_name"].value;
                var l_name = document.forms["signupform"]["l_name"].value;
                var email = document.forms["signupform"]["email"].value;
                var pwd = document.forms["signupform"]["pwd"].value;
                var c_pwd = document.forms["signupform"]["c_pwd"].value;

                if(pwd != c_pwd){
                    alert("passwords does not match");
                    return false;
                }

                if((f_name == "") || (l_name == "") || (email == "")){
                    alert("Please fill all fields!");
                    return false;
                }
                return true;
            }
        </script>
    </head>
    <body>
        <h3>register form</h3>
        <form action="dataInsert.php" name="signupform" onsubmit="return validation()" method="post">
            <input type="text" name="f_name" placeholder="first name"><br>
            <input type="text" name="l_name" placeholder="last name"><br>
            <input type="email" name="email" placeholder="email"><br>
            <input type="password" name="pwd" placeholder="password" id="pwd"><br>
            <input type="password" name="c_pwd" placeholder="confirm password" id="c_pwd"><br>
            <input type="submit" value="Sign up">
        </form>
    </body>
</html>