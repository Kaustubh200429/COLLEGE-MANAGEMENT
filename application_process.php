<?php
   include("php_include/connect.php");
   
   if(isset($_POST['submit'])) {
       $fname = $_POST['fname'];
       $lname = $_POST['lname'];
       $dob = $_POST['dob'];
       $email = $_POST['email'];
   $mobile = $_POST['mobile'];
   $sslc_school_name = $_POST['sslc_school_name'];
   $sslc_percent = $_POST['sslc_percent'];
   $pu_college_name = $_POST['pu_college_name'];
   $puc_percent = $_POST['puc_percent'];
       
       $query_contact = mysqli_query($con, "INSERT INTO `admission_form`(`fname`, `lname`, `dob`, `email`, `mobile`, `sslc_school_name`, `sslc_percent`, `pu_college_name`, `puc_percent`) 
   VALUES ('$fname','$lname','$dob','$email','$mobile','$sslc_school_name','$sslc_percent','$pu_college_name','$puc_percent')");
   
       if($query_contact) {
           echo "<script>alert('Inserted successfully'); window.location.assign('application.php');</script>";
       } else {
           echo "<script>alert('Inserted Unsuccessfully'); window.location.assign('application.php');</script>";
       }
   }
?>
