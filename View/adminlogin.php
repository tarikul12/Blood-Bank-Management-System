<?php
include('../Control/adminlogincheck.php');
include("../View/footer.php");
include("../View/header.php");

if (isset($_SESSION['username'])) {
    header("location: ../View/adminhomepage.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../CSS/adminlogin.css">
    <title>Admin Log in</title>
</head>

<body class="bodyimage">
    <center>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST"  onsubmit="return form_check_admin()" enctype="multipart/form-data">

            <h2 class="h2">Admin Login</h2>
            <table class="container">

                <tr>
                    <td>
                        <label for="uname"> <input type="text" name="uname" id="uname" placeholder="Username" onkeyup="uname_AJAX()" onkeyup="usernamecheck_admin()"><br></label>
                        <p id="nameerr"></p>
                        <p id="unameajaxresponse"></p>
                     
                    </td>

                </tr>

                <tr>
                    <td>
                        <label for="pass"> <input type="password" name="pass" id="pass" placeholder="Password" onkeyup="passwordcheck_admin()" placeholder="Password"><br></label>
                        <p id="passerr"></p>
                  
                    </td>
                </tr>

                <tr>
                    <td>
                   

                        <br>
                        <input type="checkbox" name="remember" id="remember" >
                        <label id="success"  for="remember" onkeyup="validateCheckbox()"><b>Remember Me</b></label>
                        <span id="rememberError" class="error"></span>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input class="inputbutton" type="submit"  name="submit" value="Login" >
                    </td>
                </tr>

                <tr>
                    <th id="uniqueuse">
                        <a id="denger" href="../View/forgetpassword.php">Forget Password?</a><br><br>
                        <a id="primary" href="../View/adminregistration.php">Apply Admin</a><br><br> <br><br>

                    </th>
                </tr>

            </table>
 </form>


        <script src="../JS/adminlogin.js"></script>
</body>
</center>


</html>