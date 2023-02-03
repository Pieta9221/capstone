<?php
if(isset($_GET['id'])){
  include('../inc/connection.php');
  $conn = new mysqli ($host, $user, $pwd, $database);
  
  $id = $_GET['id'];
  
  $query  = "DELETE FROM admindata WHERE id = '$id'";
  $result = $conn->query($query);
  
  if($result === TRUE){
    echo "Successfully Deleted";
    header('location:staff.php');
    
  }else{
    echo "Not Deleted";
    header('location:staff.php');
    
  }

 
} 
?>



