<?php 
// session_start();
// include_once("../session.php");
$_SESSION['fname'] = $row['fname'];
$_SESSION['passport'] = $row['passport'];
$_SESSION['dob'] = $row['dob'];
$_SESSION['user_logged_in'] = 1;
$_SESSION['passport'] = $row['passport'];
$_SESSION['gender'] = $row['gender'];
$_SESSION['phone'] = $row['phone'];
$_SESSION['role'] = $row['role'];
$_SESSION['course'] = $row['course'];
$_SESSION['state'] = $row['course'];
$_SESSION['status'] = $row['status'];
  
?>