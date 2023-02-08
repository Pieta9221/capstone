<?php 
session_start();
include('../inc/connection.php');
$conn = new mysqli ($host, $user, $pwd, $database);
if(!isset($_SESSION['email'])){
  header("location: ../../sign.php"); 
  }
  
  ?>
  <?php
$email = $_SESSION['email'];
$query  = "SELECT * FROM admindata WHERE email='$email'";
$result = $conn->query($query);
$row = $result -> fetch_array();


$id = $_GET['id'];
  
  $query  = "SELECT * FROM studentdata WHERE id = '$id'";
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
       <div class="user-wrapper">
            <div>
              <?php echo "<img src = ".'../'.$rows['passport']." width='100px' height='100px' />"; ?> 
              
            </div>
            <div>
              <h2><?php echo $rows['fname']; ?></h2>
              <p>Student</p>
            </div>
          </div>
        
          
          <div>
            <p>COURSE INFORMATION:</p>
            <hr>
            <table>
              <tr>
                <td><i class="fa-solid fa-ticket"></i> Reg No.:</td>
                <td><?php echo $rows['regnum'];?></td>
              </tr>
              <tr>
                <td><i class="fa-solid fa-book"></i> Course:</td>
                <td><?php echo $rows['course'];?></td>
              </tr>
              <tr>
                <td><i class="fa-regular fa-circle-check"></i> Quiz Score:</td>
                <td><?php echo $rows['quizscore'];?></td>
              </tr>
             
            </table>
            <br>
            <p>BASIC INFORMATION:</p>
            <hr>
            <table>
              <tr>
                <td><i class="fa-regular fa-user"></i> Gender:</td>
                <td><?php echo $rows['gender'];?></td>
              </tr>
              <tr>
                <td><i class="fa-regular fa-calendar"></i> Date of Birth:</td>
                <td><?php echo $rows['dob'];?></td>
              </tr>
              <tr>
                <td><i class="fa-solid fa-graduation-cap"></i> Student Bio:</td>
                <td><?php echo $rows['bio'];?></td>
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

              <tr>
                <td><i class="fa-solid fa-location-dot"></i> Address:</td>
                <td><?php echo $rows['address'];?></td>
              </tr>

              <tr>
                <td><i class="fa-solid fa-earth"></i> State:</td>
                <td><?php echo $rows['state'];?></td>
              </tr>
              
            </table>
            
          </div>
                    
        
      </div>
            
      
    </main>
    
    <section class="copyright">
      <p class="copy">&copy; 2022 LM Tech Hub</p>
    </section>
  
    <script src="../.././js/theme.js"></script>
</body>
</html>
<?php
} 
?>