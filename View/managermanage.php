<?php
include("../Control/updatemanager.process.php");
session_start();
if (empty($_SESSION["username"]) && empty($_SESSION["password"])) {
    header("location: ../View/adminlogin.php");
}

?>

<?php

include("../View/footer.php");
include("../View/adminsidebar.php");

?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/CSS" href="../CSS/managermanage.css">
    <title>Admin Manage</title>
</head>

<body>
    <form action="" method="POST" enctype="multipart/form-data" onsubmit="return nid_adminregistration()">

        <div class="flex-container-form_header">
            <h1 id="form_header">Search Manager By NID . . .</h1>
        </div>
        <div>
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
        </div>
        <div class=container>
            <label>NID :</label><br>
            <p id="niderr"></p>
            <input name="nid" type="text" id="nid" placeholder="search here by NID" onkeyup="nid_adminregistration()">
        </div>

        <div class="container">
            <div>
                <button type="submit" name="search">Search</button>
            </div>
        </div>
    </form>
    <form action="" method="POST" enctype="multipart/form-data" onsubmit="return form_check_admin_manage()">
        <div class="flex-container">
            <div class=container>
                <label>First Name :</label><br>
                <p id="fnameerr"></p>
                <input name="firstname" id="fname" type="text" onkeyup="firstname_admin_manage()" value="<?php echo $firstname; ?>">
            </div>
            <div class=container>
                <label>Last Name :</b></label><br>
                <p id="lnameerr"></p>
                <input name="lastname" id="lname" type="text" onkeyup="lastname_admin_manage()" value="<?php echo $lastname; ?>">
            </div>
            <div class=container>
                <label>Username :</label><br>
                <input name="username" type="text" value="<?php echo $username; ?>" readonly>
            </div>
        </div>
        <div class="flex-container">
            <div class=container>
                <label>Email-ID :</b></label><br>
                <p id="emailerr"></p>
                <input name="email" type="text" id="email" onkeyup="email_admin_manage()" value="<?php echo $email; ?>">
            </div>
            <div class=container>
                <label>NID :</label><br>
                <input name="nid" type="text" value="<?php echo $nid; ?>" readonly>
            </div>
            <div class=container>
                <label>Phone No. :</b></label><br>
                <p id="phoneerr"></p>
                <input name="phone" type="text" id="phone" onkeyup="phone_admin_manage()" value="<?php echo $phone; ?>">
            </div>
        </div>
        <div class="flex-container">
            <div class=container>
                <label>Salary :</b></label><br>
                <p id="salaryerr"></p>
                <input name="salary" type="text" id="salary" onkeyup="salary_admin_manage()" value="<?php echo $salary; ?>">
            </div>
            <div class=container>
                <label>Present Address :</b></label><br>
                <input name="presentaddress" type="text" value="<?php echo $presentaddress; ?>">
            </div>
            <div>
                <input class="button" type="submit" name="submit" id="submit" value="update">
                <a class="button" href="../View/manager.php">Show Managers</a>
            </div>
        </div>

    </form>
    <script src="../JS/adminregistration.js"></script>
    <script src="../JS/adminmanage.js"></script>
</body>

</html>