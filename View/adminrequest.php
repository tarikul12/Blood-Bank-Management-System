<?php
session_start();
if (empty($_SESSION["username"]) && empty($_SESSION["password"])) {
    header("location: ../View/adminlogin.php");
}
include("../View/footer.php");
include("../View/adminsidebar.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/adminrequest.css">
    <title>Admin Requests</title>
</head>

<body>
    <form action="" method="POST" enctype="multipart/form-data">

        <table id="example">
            <caption>Applicant Requests</caption>
            <thead>
                <tr>
                    <th scope="col">Serial</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">User Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">NID</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Picture</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>

            <tbody>
                <?php
                include("../Control/adminrequest.process.php");
                ?>
            </tbody>
        </table>


      

    </form>

</body>

</html>