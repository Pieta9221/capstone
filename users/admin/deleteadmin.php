<?php
if(isset($_GET['id'])){
  include('../inc/connection.php');
  $conn = new mysqli ($host, $user, $pwd, $database);
  
  $id = $_GET['id'];
  
  $query  = "DELETE FROM admindata WHERE id = '$id'";
  $result = $conn->query($query);
  
  if($result === TRUE){
    $_SESSION['tick'] = "Successfully Deleted";
    $_SESSION['status_code'] = "success";
    header('location:staff.php');
    exit;
  }else{
    $_SESSION['tick'] = "Not Deleted";
    $_SESSION['status_code'] = "error";
    header('location:staff.php');
    exit;
  }

 
} 
?>

<?php
  include('../inc/script.php');
  ?>

