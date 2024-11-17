<?php
   session_start();
   include('php_include/connect.php');
   if(isset($_POST['submit'])){
   $userid=mysqli_real_escape_string($con,$_POST['userid']);
   $password=mysqli_real_escape_string($con,$_POST['password']);
   
   //check who i am and position
   $query=mysqli_query($con,"SELECT * FROM `user` WHERE `userid`='$userid'");
   $row=mysqli_fetch_array($query);
   $data_userid=$row['userid'];
   $data_password=$row['password'];
   $data_who_i_am=$row['who_i_am'];
   $data_position=$row['position'];
   if($password==$data_password){
   	
   if($userid==$data_userid){
   	if($data_who_i_am=='student' && $data_position=='student'){
   	$_SESSION['userid']=$userid;
   	$_SESSION['id']=session_id();
   	$_SESSION['login_type']="student";
   	echo"<script>alert('login successful');window.location.assign('student_dashboard/index.php');</script>";
   }elseif($data_who_i_am=='teacher' && $data_position=='teacher'){
   	$_SESSION['userid']=$userid;
   	$_SESSION['id']=session_id();
   	$_SESSION['login_type']="teacher";
   	echo"<script>alert('login successful');window.location.assign('teacher_dashboard/index.php');</script>";
   }
   elseif($data_who_i_am=='admin' && $data_position=='admin'){
   	$_SESSION['userid']=$userid;
   	$_SESSION['id']=session_id();
   	$_SESSION['login_type']="admin";
   	echo"<script>alert('login successful');window.location.assign('admin_dashboard/index.php');</script>";
   }else{
   	exit;
   	}
   }else{
   	echo"<script>alert('Invalid username');window.location.assign('login.php');</script>";
   }
   }else{
   	echo"<script>alert('Invalid password');window.location.assign('login.php');</script>";
   }
   
   }
 ?>
