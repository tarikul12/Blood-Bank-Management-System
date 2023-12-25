<?php

class db
{   
    #
    function openConn()
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "bankinmanagmentsystem";
        $conn =  new mysqli( $servername, $username, $password, $dbname);
        if ($conn->connect_error)
        {
            echo "error connecting database";
        }
        return $conn;
    }
    #
    function loginadmin($conn, $staticadmin, $uname, $pass)
    {
        $sqlstr = "SELECT uname, pass FROM $staticadmin WHERE uname = '$uname' AND pass = '$pass'";
        return $conn -> query($sqlstr);
    }
   #(3)
    function insertapplicant($fname, $lname, $uname, $email, $nid, $phone, $password, $cpassword, $picture,  $applicantofadmin, $conn)
    {
        $sqlstr = "INSERT INTO $applicantofadmin (fname, lname, uname, email, nid, phone, password, cpassword, picture) VALUES ('$fname', '$lname', '$uname', '$email', '$nid', '$phone', '$password', '$cpassword', '$picture' )";
        return $conn->query($sqlstr);
    }
   #(4)
    function insertapplicant_for_backup($fname, $lname, $uname, $email, $nid, $phone, $password, $cpassword, $picture, $admin_back_up, $conn)
    {
        $sqlstr = "INSERT INTO $admin_back_up (fname, lname, uname, email, nid, phone, password, cpassword, picture) VALUES ('$fname', '$lname', '$uname', '$email', '$nid', '$phone', '$password', '$cpassword', '$picture')";
        return $conn->query($sqlstr);
    }
   #(6)
    function adding_emp_into_registrationofemployee($fname, $lname, $uname, $email, $nid, $phone, $password, $cpassword, $picture, $addedemployee, $conn)
     {
        $sqlstr = "INSERT INTO $addedemployee (fname, lname, uname, email, nid, phone, password, cpassword, picture) VALUES ('$fname', '$lname', '$uname', '$email', '$nid', '$phone', '$password', '$cpassword', '$picture')";
        return $conn->query($sqlstr);
    }
   #(5) 
    function add_usser($fname, $lname, $uname, $email, $nid, $phone, $accountno, $pin, $password, $cpassword, $new_user, $conn)
    {
        $sqlstr = "INSERT INTO $new_user (fname, lname, uname, email, nid, phone, accountno, pin, password, cpassword) VALUES ('$fname', '$lname', '$uname', '$email', '$nid', '$phone', '$accountno', '$pin', '$password', '$cpassword')";
        return $conn->query($sqlstr);
    }

    function user_searching_by_email($email, $staticadmin, $conn)
    {
        $sqlstr = "SELECT * FROM $staticadmin WHERE email = '$email'";
        return $conn -> query($sqlstr);
    }

    #Used in Admin Request (Control)(34)
    function retrive_applicant_info_for_admin($applicantofadmin, $conn)
    {
        $sqlstr = "SELECT applicant_serial, fname, lname, uname, email, nid, phone, password, picture FROM $applicantofadmin";
        return $conn -> query($sqlstr);
    }
    #(9)
    function retrive_applicant_info_for_manager($manager, $conn)
    {
        $sqlstr = "SELECT id, firstname, lastname, gender, age, username, email, presentaddress, nid, phone, doj, salary, cvpath, imgpath FROM $manager";
        return $conn->query($sqlstr);
    }
    #(7)
    function retrive_user_info_newuser_table($new_user, $conn)
    {
        $sqlstr = "SELECT user_id, fname, lname, uname, email, nid, phone, accountno, pin FROM $new_user";
        return $conn->query($sqlstr);
    }
   #(33)
    function retrive_user_info($user, $conn)
    {
        $sqlstr = "SELECT user_id, fname, lname, uname, email, nid, phone, accountno, picture FROM $user";
        return $conn-> query($sqlstr);
    }
    #(8)
    function retrive_data_from_emp($addedemployee, $conn)
    {
        $sqlstr = "SELECT id, fname, lname, uname, email, nid, phone, picture FROM $addedemployee";
        return $conn->query($sqlstr);
    }

    #Used in New Admin (Control)#(10)
    function email_checking($email, $staticadmin, $conn)
    {
        $sqlstr = "SELECT email FROM $staticadmin WHERE email = '$email'";
        return $conn -> query($sqlstr);
    }

    #Used in New Admin (Control)#(11)
    function adding_new_admin($email, $staticadmin, $applicantofadmin, $conn)
    {
        $sqlstr = "INSERT INTO $staticadmin (uname, pass, email) SELECT uname, password, email FROM $applicantofadmin WHERE email= '$email'";
        return $conn->query($sqlstr);
    }
    #(12)
    function adding_new_adminII($email, $details_table_for_selected_admins, $applicantofadmin, $conn)
    {
        $sqlstr = "INSERT INTO $details_table_for_selected_admins (fname, lname, uname, email, nid, phone) SELECT fname, lname, uname, email,nid, phone FROM $applicantofadmin WHERE email = '$email'";
        return $conn->query($sqlstr);
    }

     #(13)
    function deleting_after_selecting($email,$applicantofadmin, $conn)
    {
        $sqlstr = "DELETE FROM $applicantofadmin WHERE email='$email'";
        return $conn->query($sqlstr);
    }

    #Used in Delete Admin (Control)#(14)
    function deleting_new_admin($applicant_serial, $applicantofadmin, $conn)
    {
        $sqlstr = "DELETE FROM $applicantofadmin WHERE applicant_serial = '$applicant_serial'";
        return $conn->query($sqlstr);
    }
    #(15)
    function deleting_new_emp($id, $registrationofemployee, $conn)
    {
        $sqlstr = "DELETE FROM $registrationofemployee WHERE id = '$id'";
        return $conn->query($sqlstr);
    }
   #(13)
    function deleting_added_user($user_id, $new_user, $conn)
    {
        $sqlstr = "DELETE FROM $new_user WHERE user_id = '$user_id'";
        return $conn->query($sqlstr);
    }
   #(16)
    #search Admin by email in Forget Password Page - (Control - AJAX)
    function searching_existing_email($email, $staticadmin, $conn)
    {
        $sqlstr = "SELECT * FROM $staticadmin WHERE email ='$email'";
        return $conn -> query($sqlstr);
    }
   #(17)
    #search User by email in Admin Registration Page - (Control & AJAX)
    function searching_existing_email_registration($email, $applicantofadmin, $conn)
    {
        $sqlstr = "SELECT * FROM $applicantofadmin WHERE email ='$email'";
        return $conn->query($sqlstr);
    }
    #(18)
    #search User by nid in Admin Registration Page - (Control & AJAX)
    function seaching_exixting_nid_regisstration($nid, $applicantofadmin, $conn)
    {
        $sqlstr = "SELECT * FROM $applicantofadmin WHERE nid = '$nid'";
        return $conn -> query($sqlstr);
    }
   #(19)
    #search User by phone in Admin Registration Page - (Control & AJAX)
    function seaching_exixting_phone_regisstration($phone, $applicantofadmin, $conn)
    {
        $sqlstr = "SELECT * FROM $applicantofadmin WHERE phone = '$phone'";
        return $conn->query($sqlstr);
    }

    function showing_data_from_admin_salary_control_to_add_salary($email, $nid, $details_table_for_selected_admins, $conn)
    {
        $sqlstr = "SELECT email, nid FROM $details_table_for_selected_admins WHERE email ='$email' AND nid = '$nid'";
        return $conn->query($sqlstr);
    }

    #(32)
    #search Admin by Username in admin Login Page - (Control -AJAX)
    function search_admin_by_username($uname, $staticadmin, $conn)
    {
        $sqlstr = "SELECT * FROM $staticadmin WHERE uname = '$uname'";
        return $conn -> query($sqlstr);
    }

    #Used in Admin Manage (Control)#(20)
    function search_by_User_name($username, $details_table_for_selected_admins, $conn)
    {
        $sqlstr = "SELECT fname, lname, uname, email, nid, phone FROM $details_table_for_selected_admins WHERE uname = '$username'";
        return $conn->query($sqlstr);
    }
   #(30)
    function search_by_nid($nid, $manager, $conn)
    {
        $sqlstr = "SELECT firstname, lastname, username, email, nid,phone,salary, presentaddress FROM $manager WHERE nid = '$nid'";
        return $conn->query($sqlstr);
    }
   #(31)
    function search_by_User_accountno($accountno, $user, $conn)
    {
        $sqlstr = "SELECT fname, lname, uname, email, nid, phone, accountno FROM $user WHERE accountno = '$accountno'";
        return $conn->query($sqlstr);
    }
    #(25)
    function updateProfile($fname, $lname, $uname, $email, $nid, $phone, $details_table_for_selected_admins, $conn)
    {
        $sqlstr = "UPDATE $details_table_for_selected_admins SET fname='$fname', lname='$lname', email='$email', nid='$nid', phone='$phone' WHERE uname ='$uname' ";
        return $conn->query($sqlstr);
    }
     #(21)
    function update_user($fname, $lname, $uname, $email, $phone ,$accountno, $user, $conn)
    {
        $sqlstr = "UPDATE $user SET fname='$fname', lname='$lname', uname='$uname', email='$email', phone='$phone' WHERE accountno ='$accountno' ";
        return $conn->query($sqlstr);
    }
    #(22)
    function updateProfilemanager($firstname, $lastname, $username, $email, $nid, $phone, $salary, $presentaddress, $manager, $conn)
    {
        $sqlstr = "UPDATE $manager SET firstname='$firstname', lastname='$lastname', username='$username', email='$email', phone='$phone', salary='$salary', presentaddress='$presentaddress' WHERE nid ='$nid'";
        return $conn->query($sqlstr);
    }
   #(23)
    function updateProfileI($uname, $email,$admin_account_number, $conn)
    {
        $sqlstr = "UPDATE $admin_account_number SET email='$email' WHERE uname ='$uname' ";
        return $conn->query($sqlstr);
    }
   #(24)
    function updateProfileII($uname, $email, $staticadmin, $conn)
    {
        $sqlstr = "UPDATE $staticadmin SET email='$email' WHERE uname ='$uname' ";
        return $conn->query($sqlstr);
    }
   #(26)
    function retrive_from_details_table_for_selected_admins($details_table_for_selected_admins, $conn)
    {
        $sqlstr = "SELECT * FROM $details_table_for_selected_admins";
        return $conn->query($sqlstr);
    }
   #(27)
    function post_news($headline, $news_details, $news, $conn)
    {
        $sqlstr = "INSERT INTO $news (tittle, news_body, created) VALUES ('$headline', '$news_details', NOW())";
        return $conn->query($sqlstr);
    }

    #(29)
    function displaynews($table,$conn)
    {
        $sqlstr = "SELECT * FROM $table ";
        return $conn->query($sqlstr);
    }

    public function closeConn($conn) {
        return $conn->close();
    }

}


?>