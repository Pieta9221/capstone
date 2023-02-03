<?php
if(isset($_GET['id'])){
  include('../inc/connection.php');
  $conn = new mysqli ($host, $user, $pwd, $database);
  
    $id = $_GET['regnum'];
    
    $status = "Suspended";
       
        
    $edit = "UPDATE studentdata SET status ='$status' WHERE regnum='$regnum'";
    
    $result = $conn->query($edit);
  
    if($result === TRUE ){
      echo "Data updated";
      header("location:admissions.php");
    } else{  
      echo "Data not updated";
      include("admissions.php");
    }
 

 
} 

if(isset($_GET['id'])){
  include('../inc/connection.php');
  $conn = new mysqli ($host, $user, $pwd, $database);
  
    $id = $_GET['id'];
    
    $status = "Denied";
       
        
    $edit = "UPDATE studentdata SET status ='$status' WHERE id='$id'";
    
    $result = $conn->query($edit);
  
    if($result === TRUE ){
      echo "Data updated";
      header("location:admissions.php");
    } else{  
      echo "Data not updated";
      include("admissions.php");
    }
 

 
} 
?>



