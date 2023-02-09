<?php
  include('./users/inc/connection.php');
  $conn = new mysqli ($host, $user, $pwd, $database);
  if ($conn->connect_error){
    die("Server not found".connect_error);
  }
  else{
  

    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $message = $_REQUEST['message'];

    $adminemail = "mercy_nwaodu@yahoo.com";
    $send = mail($adminemail, $name, $message, "From: ".$email);

    if($send){
      echo "<script> alert('$name, your mail has been successfully sent')</script>";
      include("index.php");
    }
    else{
      echo "<script> alert('$name, your message was not sent!')</script>";
      include("index.php");
    }
  }  

?>