<?php
  session_start();
  include('./users/inc/connection.php');
  $conn = new mysqli ($host, $user, $pwd, $database);
  
  $email = $_POST['email'];
  $pword = $_POST['pword'];
  $pword2 = md5($pword);

  $_SESSION['email'] = $email;
  $_SESSION['pword'] = $pword;
 

  $query  = "SELECT * FROM studentdata WHERE email = '$email' && pword = '$pword2'";
  $res = $conn->query($query);
  
  

  if($res->num_rows == 1){
    header('location:users/student/dashboard.php');
  } 
  else{
    $query2  = "SELECT * FROM admindata WHERE email = '$email' && pword = '$pword2'";
    $res2 = $conn->query($query2);
    if($res2->num_rows == 1){
      $rows = $res2->fetch_array();

      if($rows['status'] == "Admin"){
        header('location:users/admin/dashboard.php');
      } else if($rows['status'] == "Tutor"){
        header('location:users/tutor/dashboard.php');
      }
    } else{  
      echo "<script> alert('Invalid login details!') </script>";
      include("sign.php");
      exit();
    }
    
  }
  
 
?>