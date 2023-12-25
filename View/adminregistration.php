<?php
session_start();
if (isset($_SESSION['username'])) {
    header("location: ../View/adminlogin.php");
}

include('../Control/adminregistrationcheck.php');
include("../View/footer.php");
include("../View/header.php");

?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/adminregistration.css">
    <title>Admin Application Form</title>
</head>

<body>

    <?php
    if (count($errors) > 0) {
    ?>
        <div>
            <?php
            foreach ($errors as $showerror) {
                echo "<p id='denger'> $showerror</p>";
            }
            ?>
        </div>
    <?php
    } else if (count($success) > 0) {
    ?>
        <div>
            <?php
            foreach ($success as $ok) {
                echo "<p id='success'> $ok</p>";
            }
            ?>
        </div>
    <?php
    }
    ?>

<center>
    <div>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data" onsubmit="return form_check_adminregistration()">
            <h2 class="h2" id="h2">Application Form</h2>
            <div class="input-box">
                <div class="input-field">
                    <input type="text" name="fname" id="fname" onkeyup="fnamecheck_adminregistration()" placeholder="Firstname">
                    <p id="fnameerr"></p>
                </div>
            </div>
            <div class="input-box">
                <div class="input-field">
                    <input type="text" name="lname" id="lname" onkeyup="lnamecheck_adminregistration()" placeholder="Lastname">
                    <p id="lnameerr"></p>
                </div>
            </div>
            <div class="input-box">
                <div class="input-field">
                    <input type="text" name="uname" id="uname" onkeyup="usernamecheck_admin()" placeholder="Username"> 
                    <p id="nameerr"></p>
                </div>
            </div>

            <div class="input-box">
                <div class="input-field">
                    <input type="text" name="email" id="email" onkeyup="registration_email_AJAX()" onkeyup="email_adminregistration()" placeholder="Email">
                    <p id="emailerr"></p>
                    <p id="emailajaxresponse"></p>
                </div>
            </div>
            <div class="input-box">
                <div class="input-field">
                    <input type="text" name="nid" id="nid" onkeyup="registration_nid_AJAX()" onkeyup="nid_adminregistration()" placeholder="Valid NID">
                    <p id="niderr"></p>
                    <p id="nidajaxresponse"></p>
                </div>
            </div>

            <div class="input-box">
                <div class="input-field">
                    <input type="text" name="phone" id="phone" onkeyup="registration_phone_AJAX()" onkeyup="phone_adminregistration()" placeholder="+880-1XXXXXXXXX">
                    <p id="phoneerr"></p>
                    <p id="phoneajaxresponse"></p>
                </div>
           </div>

           <div class="input-box">
                <div class="input-field">
                    <input type="password" name="password" id="pass" onkeyup="password_adminregistration()" placeholder="Password">
                    <p id="passerr"></p>
                </div>
           </div>

           <div class="input-box">
                <div class="input-field">
                    <input type="password" name="cpassword" id="cpass" onkeyup="confirm_password_adminregistration()" placeholder="Confirm Password">
                    <p id="cpasserr"></p>
                </div>
            </div>

             <div class="input-box">
                <div class="input-field">
                    Please upload your picture
                    <input type="file" name="picture" id="picture" onchange="picture_adminregistration()">
                    <p id="imgerr"></p>
                </div>
            </div>

            <div class="input-box">
                <div class="input-field">
                    <input class="" type="submit" name="submit" id="submit" value="Apply">

                    <a class="" href="../View/adminlogin.php" name="return">Back to Login</a>
                </div>
            </div>
            <br>  <br>  <br>
        </form>

    </div>
    </center>
    <script src="../JS/adminregistration.js"></script>
</body>

</html>