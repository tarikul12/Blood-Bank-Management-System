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
    <link rel="stylesheet" href="../CSS/adminhome.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css" />
    <title>Admin Dashboard</title>
</head>

<body>
    <div>
        <div>
            <center>
                <h1 id="customer">Welcome to the Dashboard admin<?php include('../Control/cookie.php'); ?></h1>
            </center>
            <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Facility Name</th>
                        <th>Blood Group</th>
                        <th>Blood Bag Number</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Component</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Kurmitola 500 Bed General Hospital</td>
                        <td>O+</td>
                        <td>336</td>
                        <td>61</td>
                        <td>2011-04-25</td>
                        <td>Whole Blood</td>
                    </tr>
                    <tr>
                        <td>Kurmitola 500 Bed General Hospital</td>
                        <td>AB+</td>
                        <td>332</td>
                        <td>63</td>
                        <td>2011-07-25</td>
                        <td>Whole Blood</td>
                    </tr>
                    <tr>
                        <td>Kurmitola 500 Bed General Hospital</td>
                        <td>O+</td>
                        <td>221</td>
                        <td>66</td>
                        <td>2009-01-12</td>
                        <td>Whole Blood</td>
                    </tr>
                    <tr>
                        <td>Sir Salimullah Medical College Hospital</td>
                        <td>AB+</td>
                        <td>739</td>
                        <td>22</td>
                        <td>2012-03-29</td>
                        <td>SDP (Apheresis PT)</td>
                    </tr>
                    <tr>
                        <td>Shaheed Suhrawardy Medical College Hospital</td>
                        <td>AB+</td>
                        <td>414</td>
                        <td>33</td>
                        <td>2008-11-28</td>
                        <td>SDP (Apheresis PT)</td>
                    </tr>
                    <tr>
                        <td>Sir Salimullah Medical College Hospital</td>
                        <td>AB+</td>
                        <td>2146</td>
                        <td>61</td>
                        <td>2012-12-02</td>
                        <td>Whole Blood</td>
                    </tr>
                    <tr>
                        <td>Sir Salimullah Medical College Hospital</td>
                        <td>B+</td>
                        <td>2146</td>
                        <td>61</td>
                        <td>2012-12-02</td>
                        <td>Whole Blood</td>
                    </tr>
                    <tr>
                        <td>Sir Salimullah Medical College Hospital</td>
                        <td>A+</td>
                        <td>2146</td>
                        <td>61</td>
                        <td>2012-12-02</td>
                        <td>Whole Blood</td>
                    </tr>
                    <tr>
                        <td>Sir Salimullah Medical College Hospital</td>
                        <td>AB-</td>
                        <td>2146</td>
                        <td>61</td>
                        <td>2012-12-02</td>
                        <td>Whole Blood</td>
                    </tr>
                    <tr>
                        <td>Sir Salimullah Medical College Hospital</td>
                        <td>B-</td>
                        <td>2146</td>
                        <td>61</td>
                        <td>2012-12-02</td>
                        <td>Whole Blood</td>
                    </tr>
                    <tr>
                        <td>Sir Salimullah Medical College Hospital</td>
                        <td>B-</td>
                        <td>2146</td>
                        <td>61</td>
                        <td>2012-12-02</td>
                        <td>Whole Blood</td>
                    </tr>
                    <tr>
                        <td>Sir Salimullah Medical College Hospital</td>
                        <td>B-</td>
                        <td>2146</td>
                        <td>61</td>
                        <td>2012-12-02</td>
                        <td>Whole Blood</td>
                    </tr>
                    <tr>
                        <td>Sir Salimullah Medical College Hospital</td>
                        <td>B-</td>
                        <td>2146</td>
                        <td>61</td>
                        <td>2012-12-02</td>
                        <td>Whole Blood</td>
                    </tr>
                    <tr>
                        <td>Sir Salimullah Medical College Hospital</td>
                        <td>B-</td>
                        <td>2146</td>
                        <td>61</td>
                        <td>2012-12-02</td>
                        <td>Whole Blood</td>
                    </tr>
                    <tr>
                        <td>Sir Salimullah Medical College Hospital</td>
                        <td>B-</td>
                        <td>2146</td>
                        <td>61</td>
                        <td>2012-12-02</td>
                        <td>Whole Blood</td>
                    </tr>
                    <tr>
                        <td>Sir Salimullah Medical College Hospital</td>
                        <td>B-</td>
                        <td>2146</td>
                        <td>61</td>
                        <td>2012-12-02</td>
                        <td>Whole Blood</td>
                    </tr>
                    <tr>
                        <td>Sir Salimullah Medical College Hospital</td>
                        <td>B-</td>
                        <td>2146</td>
                        <td>61</td>
                        <td>2012-12-02</td>
                        <td>Whole Blood</td>
                    </tr>
                    <tr>
                        <td>Sir Salimullah Medical College Hospital</td>
                        <td>B-</td>
                        <td>2146</td>
                        <td>61</td>
                        <td>2012-12-02</td>
                        <td>Whole Blood</td>
                    </tr>
                    <tr>
                        <td>Sir Salimullah Medical College Hospital</td>
                        <td>B-</td>
                        <td>2146</td>
                        <td>61</td>
                        <td>2012-12-02</td>
                        <td>Whole Blood</td>
                    </tr>
                    <tr>
                        <td>Sir Salimullah Medical College Hospital</td>
                        <td>B-</td>
                        <td>2146</td>
                        <td>61</td>
                        <td>2012-12-02</td>
                        <td>Whole Blood</td>
                    </tr>
                    <tr>
                        <td>Sir Salimullah Medical College Hospital</td>
                        <td>B-</td>
                        <td>2146</td>
                        <td>61</td>
                        <td>2012-12-02</td>
                        <td>Whole Blood</td>
                    </tr>
                    <tr>
                        <td>Sir Salimullah Medical College Hospital</td>
                        <td>B-</td>
                        <td>2146</td>
                        <td>61</td>
                        <td>2012-12-02</td>
                        <td>Whole Blood</td>
                    </tr>
                    <tr>
                        <td>Sir Salimullah Medical College Hospital</td>
                        <td>B-</td>
                        <td>2146</td>
                        <td>61</td>
                        <td>2012-12-02</td>
                        <td>Whole Blood</td>
                    </tr>
                    <tr>
                        <td>Sir Salimullah Medical College Hospital</td>
                        <td>B-</td>
                        <td>2146</td>
                        <td>61</td>
                        <td>2012-12-02</td>
                        <td>Whole Blood</td>
                    </tr>
                    <tr>
                        <td>Sir Salimullah Medical College Hospital</td>
                        <td>B-</td>
                        <td>2146</td>
                        <td>61</td>
                        <td>2012-12-02</td>
                        <td>Whole Blood</td>
                    </tr>
                    <tr>
                        <td>Sir Salimullah Medical College Hospital</td>
                        <td>B-</td>
                        <td>2146</td>
                        <td>61</td>
                        <td>2012-12-02</td>
                        <td>Whole Blood</td>
                    </tr>
                    <tr>
                        <td>Sir Salimullah Medical College Hospital</td>
                        <td>B-</td>
                        <td>2146</td>
                        <td>61</td>
                        <td>2012-12-02</td>
                        <td>Whole Blood</td>
                    </tr>
                    <tr>
                        <td>Sir Salimullah Medical College Hospital</td>
                        <td>B-</td>
                        <td>2146</td>
                        <td>61</td>
                        <td>2012-12-02</td>
                        <td>Whole Blood</td>
                    </tr>
                    <tr>
                        <td>Sir Salimullah Medical College Hospital</td>
                        <td>B-</td>
                        <td>2146</td>
                        <td>61</td>
                        <td>2012-12-02</td>
                        <td>Whole Blood</td>
                    </tr>
                    <tr>
                        <td>Sir Salimullah Medical College Hospital</td>
                        <td>B-</td>
                        <td>2146</td>
                        <td>61</td>
                        <td>2012-12-02</td>
                        <td>Whole Blood</td>
                    </tr>
                    <tr>
                        <td>Sir Salimullah Medical College Hospital</td>
                        <td>B-</td>
                        <td>2146</td>
                        <td>61</td>
                        <td>2012-12-02</td>
                        <td>Whole Blood</td>
                    </tr>
                    <tr>
                        <td>Sir Salimullah Medical College Hospital</td>
                        <td>B-</td>
                        <td>2146</td>
                        <td>61</td>
                        <td>2012-12-02</td>
                        <td>Whole Blood</td>
                    </tr>
                    <tr>
                        <td>Sir Salimullah Medical College Hospital</td>
                        <td>B-</td>
                        <td>2146</td>
                        <td>61</td>
                        <td>2012-12-02</td>
                        <td>Whole Blood</td>
                    </tr>
                    <tr>
                        <td>Sir Salimullah Medical College Hospital</td>
                        <td>B-</td>
                        <td>2146</td>
                        <td>61</td>
                        <td>2012-12-02</td>
                        <td>Whole Blood</td>
                    </tr>
                    <tr>
                        <td>Sir Salimullah Medical College Hospital</td>
                        <td>B-</td>
                        <td>2146</td>
                        <td>61</td>
                        <td>2012-12-02</td>
                        <td>Whole Blood</td>
                    </tr>
                    <tr>
                        <td>Sir Salimullah Medical College Hospital</td>
                        <td>B-</td>
                        <td>2146</td>
                        <td>61</td>
                        <td>2012-12-02</td>
                        <td>Whole Blood</td>
                    </tr>
                    <tr>
                        <td>Sir Salimullah Medical College Hospital</td>
                        <td>B-</td>
                        <td>2146</td>
                        <td>61</td>
                        <td>2012-12-02</td>
                        <td>Whole Blood</td>
                    </tr>
                    <tr>
                        <td>Sir Salimullah Medical College Hospital</td>
                        <td>B-</td>
                        <td>2146</td>
                        <td>61</td>
                        <td>2012-12-02</td>
                        <td>Whole Blood</td>
                    </tr>
                    <tr>
                        <td>Sir Salimullah Medical College Hospital</td>
                        <td>B-</td>
                        <td>2146</td>
                        <td>61</td>
                        <td>2012-12-02</td>
                        <td>Whole Blood</td>
                    </tr>
                    <tr>
                        <td>Sir Salimullah Medical College Hospital</td>
                        <td>B-</td>
                        <td>2146</td>
                        <td>61</td>
                        <td>2012-12-02</td>
                        <td>Whole Blood</td>
                    </tr>
                    <tr>
                        <td>Sir Salimullah Medical College Hospital</td>
                        <td>B-</td>
                        <td>2146</td>
                        <td>61</td>
                        <td>2012-12-02</td>
                        <td>Whole Blood</td>
                    </tr>
                    <tr>
                        <td>Sir Salimullah Medical College Hospital</td>
                        <td>B-</td>
                        <td>2146</td>
                        <td>61</td>
                        <td>2012-12-02</td>
                        <td>Whole Blood</td>
                    </tr>
                    <tr>
                        <td>Sir Salimullah Medical College Hospital</td>
                        <td>B-</td>
                        <td>2146</td>
                        <td>61</td>
                        <td>2012-12-02</td>
                        <td>Whole Blood</td>
                    </tr>
                    <tr>
                        <td>Sir Salimullah Medical College Hospital</td>
                        <td>B-</td>
                        <td>2146</td>
                        <td>61</td>
                        <td>2012-12-02</td>
                        <td>Whole Blood</td>
                    </tr>
                    <tr>
                        <td>Sir Salimullah Medical College Hospital</td>
                        <td>B-</td>
                        <td>2146</td>
                        <td>61</td>
                        <td>2012-12-02</td>
                        <td>Whole Blood</td>
                    </tr>
                    <tr>
                        <td>Sir Salimullah Medical College Hospital</td>
                        <td>B-</td>
                        <td>2146</td>
                        <td>61</td>
                        <td>2012-12-02</td>
                        <td>Whole Blood</td>
                    </tr>
                    <tr>
                        <td>Sir Salimullah Medical College Hospital</td>
                        <td>B-</td>
                        <td>2146</td>
                        <td>61</td>
                        <td>2012-12-02</td>
                        <td>Whole Blood</td>
                    </tr>
                    <tr>
                        <td>Sir Salimullah Medical College Hospital</td>
                        <td>B-</td>
                        <td>2146</td>
                        <td>61</td>
                        <td>2012-12-02</td>
                        <td>Whole Blood</td>
                    </tr>
                    <tr>
                        <td>Sir Salimullah Medical College Hospital</td>
                        <td>B-</td>
                        <td>2146</td>
                        <td>61</td>
                        <td>2012-12-02</td>
                        <td>Whole Blood</td>
                    </tr>
                    <tr>
                        <td>Sir Salimullah Medical College Hospital</td>
                        <td>B-</td>
                        <td>2146</td>
                        <td>61</td>
                        <td>2012-12-02</td>
                        <td>Whole Blood</td>
                    </tr>
                    <tr>
                        <td>Sir Salimullah Medical College Hospital</td>
                        <td>B-</td>
                        <td>2146</td>
                        <td>61</td>
                        <td>2012-12-02</td>
                        <td>Whole Blood</td>
                    </tr>
                    <tr>
                        <td>Sir Salimullah Medical College Hospital</td>
                        <td>B-</td>
                        <td>2146</td>
                        <td>61</td>
                        <td>2012-12-02</td>
                        <td>Whole Blood</td>
                    </tr>
                    <tr>
                        <td>Sir Salimullah Medical College Hospital</td>
                        <td>B-</td>
                        <td>2146</td>
                        <td>61</td>
                        <td>2012-12-02</td>
                        <td>Whole Blood</td>
                    </tr>
                    <tr>
                        <td>Sir Salimullah Medical College Hospital</td>
                        <td>B-</td>
                        <td>2146</td>
                        <td>61</td>
                        <td>2012-12-02</td>
                        <td>Whole Blood</td>
                    </tr>

                    <tr>
                        <td>National Institute of Diseases of the Chest & Hospital (NIDCH)</td>
                        <td>C+</td>
                        <td>11</td>
                        <td>29</td>
                        <td>2011-06-27</td>
                        <td>Hw</td>
                    </tr>
                    </tr>

                </tbody>
                <tfoot>
                    <tr>
                        <th>Facility Name</th>
                        <th>Blood Group</th>
                        <th>Blood Bag Number</th>
                        <th>Age</th>
                        <th>Start date</th>
                        <th>Component</th>
                    </tr>
                </tfoot>
            </table>

        </div>
        <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
        <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
        <script src="../JS/adminhomepage.js"></script>
    
</body>

</html>