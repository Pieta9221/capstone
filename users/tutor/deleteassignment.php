<?php
if(isset($_GET['id'])){
  include('../inc/connection.php');
  $conn = new mysqli ($host, $user, $pwd, $database);
  
  $id = $_GET['id'];
  
  $query  = "DELETE FROM assignment WHERE id = '$id'";
  $result = $conn->query($query);
  
  if($resultb== TRUE){
    echo "Successfully Deleted";
    header('location:assign.php');
    exit;
  }else{
    echo "Not Deleted";
    header('location:assign.php');
    exit;
  }

 
} 
?>

