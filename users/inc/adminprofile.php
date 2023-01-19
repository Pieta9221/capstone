<?php 
session_start();
// include_once("../session.php");
include('connection.php');
$conn = new mysqli ($host, $user, $pwd, $database);
$email = $_SESSION['email'];
$query  = "SELECT * FROM admindata WHERE email='$email'";
$result = $conn->query($query);
$row = $result -> fetch_array();

$id = $_GET['id'];
  
  $query  = "SELECT * FROM admindata WHERE id = '$id'";
  $res = $conn->query($query);
  $rows = $res->fetch_array();

  if($result->num_rows == 0){
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
              <div><a href=""><i class="fa-solid fa-pen"></i></a></div>
            </div>
           <div>
              <h2><?php echo $rows['fname']; ?></h2>
              <p>Tutor</p>
            </div>
          </div>
          <br>
          
          <div>
            <p>COURSE INFORMATION:</p>
            <hr>
            <table>
              <tr>
                <td>Staff Num.:</td>
                <td>LM12201</td>
              </tr>
              <tr>
                <td>Role:</td>
                <td><?php echo $rows['role'];?></td>
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

              
            
            </table>
            <br>
          </div>
          
            
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