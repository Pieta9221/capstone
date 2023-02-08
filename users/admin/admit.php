<?php
if(isset($_GET['id'])){
  include('../inc/connection.php');
  $conn = new mysqli ($host, $user, $pwd, $database);
  if(!isset($_SESSION['email'])){
    header("location: ../../sign.php"); 
    }
    
    ?>
    <?php
  
    $id = $_GET['id'];

    $query  = "SELECT * FROM studentdata WHERE email='$email'";
    $result = $conn->query($query);
    $row = $result -> fetch_array();
    
    
    $status = "Admitted";
    $regnum = "LM12".(rand(100,999));

    if(empty($row['regnum'])){
      $edit = "UPDATE studentdata SET status ='$status' WHERE id='$id'";
      $result = $conn->query($edit);
      if($result === TRUE ){
        echo "Data updated";
        header("location:admissions.php");
      } else{  
        echo "Data not updated";
        include("admissions.php");
      }
    } else{
      $edit2 = "UPDATE studentdata SET  regnum = '$regnum', status ='$status'WHERE id='$id'";
      $result = $conn->query($edit2);
      if($result === TRUE ){
        echo "Data updated";
        header("location:admissions.php");
      } else{  
        echo "Data not updated";
        include("admissions.php");
      }
    }
    
     
   
 

 
} 
?>



