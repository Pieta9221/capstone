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
    $_SESSION['user'] = $row['fname'];
    $_SESSION['user_logged_in'] = 1;
    $_SESSION['pic'] = $row['passport'];
    header('location:users/student/dashboard.php');
  } 
  else{
    $query2  = "SELECT * FROM admindata WHERE email = '$email' && pword = '$pword2'";
    $res2 = $conn->query($query2);
    if($res2->num_rows === 1){
      $row = $res2->fetch_array();  
      $_SESSION['user'] = $row['fname'];
      $_SESSION['user_logged_in'] = 1;
      $_SESSION['pic'] = $row['passport'];
    header('location:users/admin/dashboard.php');
    } else{
    echo "<h2>Invalid login details! </h2>";
    include("sign.html");
    exit();
    }
  }
  
 
?>