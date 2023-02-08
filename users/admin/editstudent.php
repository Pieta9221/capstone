<?php 
session_start();
// include_once("../session.php");
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



if(isset($_POST['update'])){
  $id = $_GET['id'];
  
  $course = $_POST['course'];
  $address = $_POST['address'];
  $phone = $_POST['phone'];
  
      
  $edit = "UPDATE studentdata SET course ='$course', address = '$address', phone = '$phone' WHERE id='$id'";
  
  $result = $conn->query($edit);

  if($result === TRUE ){
    echo "Data updated";
    header("location:student.php");
  } else{  
    echo "Data not updated";
  }
}

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
        <div>
          <div class="user-wrapper">
            
              <?php echo "<img src = ".'../'.$rows['passport']." width='100px' height='100px' />"; ?> 
              
            
           <div>
              <h2><?php echo $rows['fname']; ?></h2>
              <p>Student, <?php echo $rows['regnum']; ?></p>
            </div>
          </div>
          <br>
          
          <div>
            <p>COURSE INFORMATION:</p>
            <hr>
            <table>
              <form method="POST">
              
              <tr>
                <td>Course:</td>
                <td><input type="text" name="course" value="<?php echo $rows['course']; ?>" required/></td>
              </tr>

              <tr>
                <td>Address:</td>
                <td><input type="text" name="address" value="<?php echo $rows['address']; ?>" required/></td>
              </tr>
             
            
              <tr>
                <td>Phone:</td>
                <td><input type="tel" name="phone" value="<?php echo $rows['phone']; ?>" required/></td>
              </tr>
              
              <tr>
                <td></td>
                <td><button type="submit" class="btn" name="update" ><i class="fa-solid fa-pen"></i> Update</button></td>
              </tr>

              
            
            
            <br>
            </a>
            </form>
            </table>
            
          </div>
          
            
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