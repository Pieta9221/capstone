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
  
  

  if($res->num_rows === 1){
    $row = $res->fetch_array();
    $_SESSION['fname'] = $row['fname'];
    $_SESSION['user_logged_in'] = 1;
    $_SESSION['passport'] = $row['passport'];
    $_SESSION['dob'] = $row['dob'];
    $_SESSION['gender'] = $row['gender'];
    $_SESSION['regnum'] = $row['regnum'];
    $_SESSION['phone'] = $row['phone'];
    $_SESSION['course'] = $row['course'];
    $_SESSION['address'] = $row['address'];
    $_SESSION['state'] = $row['state'];
    header('location:users/student/dashboard.php');
  } 
  else{
    $query2  = "SELECT * FROM admindata WHERE email = '$email' && pword = '$pword2'";
    $res2 = $conn->query($query2);
    if($res2->num_rows === 1){
      $rows = $res2->fetch_array();
      $_SESSION['fname'] = $rows['fname'];
      $_SESSION['email'] = $rows['email'];
      $_SESSION['user_logged_in'] = 1;
      $_SESSION['passport'] = $rows['passport'];
      $_SESSION['status'] = $rows['status'];
      $_SESSION['role'] = $rows['role'];
      $_SESSION['phone'] = $rows['phone'];
      $_SESSION['staffnum'] = $rows['staffnum'];
      $_SESSION['fname'] = $rows['fname'];
      $_SESSION['user_logged_in'] = 1;
      $_SESSION['passport'] = $rows['passport'];
      if($rows['status'] == "Admin"){
        header('location:users/admin/dashboard.php');
      } else if($rows['status'] == "Tutor"){
        header('location:users/tutor/dashboard.php');
      }
    } else{  
      echo "<h2>Invalid login details! </h2>";
      include("sign.html");
      exit();
    }
    
  }
  
 
?>