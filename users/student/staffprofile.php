<?php 
session_start();
include('../inc/connection.php');
$conn = new mysqli ($host, $user, $pwd, $database);
$email = $_SESSION['email'];
$query  = "SELECT * FROM studentdata WHERE email='$email'";
$result = $conn->query($query);
$row = $result -> fetch_array();


$staffid = $_GET['staffid'];
  
  $query  = "SELECT * FROM admindata WHERE staffid = '$staffid'";
  $res = $conn->query($query);
  $rows = $res->fetch_array();

  if($res->num_rows == 0){
    echo "Data not found";
  } else{  
 
?>


<?php 
      include('nav.php');
    ?>
  
  <main>
      <div class="recent">
        <div>
          <div class="user-wrapper">
            <div>
              <?php echo "<img src = ".'../'.$rows['passport']." width='100px' height='100px' />"; ?> 
              
            </div>
            <div>
              <h2><?php echo $rows['fname']; ?></h2>
              <p><?php echo $rows['status']; ?></p>
            </div>
          </div>
          <br>
          
          <table>
             
            <div>
            <p>STAFF INFORMATION:</p>
            <hr>
            <table>
              <tr>
                <td><i class="fa-solid fa-ticket"></i> Staff ID:</td>
                <td><?php echo $rows['staffid'];?></td>
              </tr>
              <tr>
                <td><i class="fa-solid fa-user-tie"></i> Role:</td>
                <td><?php echo $rows['role'];?></td>
              </tr>
             
            </table>
            <br>
            

            <p>CONTACT INFORMATION:</p>
            <hr>
            <table>
              <tr>
                <td><i class="fa-solid fa-phone"></i> Phone:</td>
                <td><?php echo $rows['phone'];?></td>
              </tr>
              
              <tr>
                <td><i class="fa-regular fa-envelope"></i> Email:</td>
                <td><?php echo $rows['email'];?></td>
              </tr>
            </table>
            
          </div>
                    
       
      </div>
            
      
    </main>
   
    <section class="copyright">
      <p class="copy">&copy; 2022 LM Tech Hub</p>
    </section>
  

</body>
</html>
<?php
} 
?>