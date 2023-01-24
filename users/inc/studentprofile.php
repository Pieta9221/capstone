<?php 
session_start();
// include_once("../session.php");
include('connection.php');
$conn = new mysqli ($host, $user, $pwd, $database);

$id = $_GET['id'];
  
  $query  = "SELECT * FROM studentdata WHERE id = '$id'";
  $res = $conn->query($query);
  $rows = $res->fetch_array();

  if($res->num_rows == 0){
    echo "Data not found";
  } else{  
 
?>


<!DOCTYPE html>
<html>
 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Student Profile</title>
   <link rel="stylesheet" href="../.././css/dashboard.css">
   <link rel="icon" href="../inc/favicon.png">   
   <link href="https:fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   
      
  </head>
<body>
  
    <section class="cop">
      <h2 class="copy">Student Profile</h2>
    </section>
    
    <div class="recent">
        <div>
          <div class="user-wrapper">
            <?php echo "<img src = ".'../'.$rows['passport']." width='100px' height='100px' />"; ?> 
             
            </div>
            <div>
              <h2><?php echo $rows['fname']; ?></h2>
              <p>Student</p>
            </div>
          </div>
          <br>
          
          <div>
            <p>COURSE INFORMATION:</p>
            <hr>
            <table>
              <tr>
                <td>Reg No.:</td>
                <td>LM12201</td>
              </tr>
              <tr>
                <td>Course:</td>
                <td><?php echo $rows['course'];?></td>
              </tr>
             
            </table>
            <br>
            <p>BASIC INFORMATION:</p>
            <hr>
            <table>
              <tr>
                <td>Gender:</td>
                <td><?php echo $rows['gender'];?></td>
              </tr>
              <tr>
                <td>Date of Birth:</td>
                <td><?php echo $rows['dob'];?></td>
              </tr>
            </table>
            <br>

            <p>CONTACT INFORMATION:</p>
            <hr>
            <table>
              <tr>
                <td>Phone:</td>
                <td><?php echo $rows['phone'];?></td>
              </tr>
              
              <tr>
                <td>Email:</td>
                <td><?php echo $rows['email'];?></td>
              </tr>

              <tr>
                <td>Address:</td>
                <td><?php echo $rows['address'];?></td>
              </tr>

              <tr>
                <td>State:</td>
                <td><?php echo $rows['state'];?></td>
              </tr>
              
            </table>
          </div>
                    
        </div>
      </div>
            

  
      <br>
    <br>
    <section class="copyright">
      <p class="copy">&copy; 2022 LM Tech Hub</p>
    </section>
  

</body>
</html>
<?php
} 
?>