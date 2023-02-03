<?php 
session_start();
// include_once("../session.php");
include('../inc/connection.php');
$conn = new mysqli ($host, $user, $pwd, $database);
$email = $_SESSION['email'];
$query  = "SELECT * FROM admindata WHERE email='$email'";
$result = $conn->query($query);
$row = $result -> fetch_array();

if(isset($_GET['regnum'])){
  $regnum = $_GET['regnum'];
  
  $query  = "SELECT * FROM review WHERE regnum = '$regnum'";
  $res = $conn->query($query);
  $rows = $res->fetch_array();

  if($res->num_rows == 0){
    echo "Data not found";
  } else{ 
  } 
?>


    <?php 
      include('nav.php');
    ?>
    
    <main>
      <div class="recent">
      <div class="user-wrapper">
            
          <div>
            <h2>Student Information</h2>
            </div>
        </div>
          <div>
            
            <table>
              <form method="POST">
              <tr>
                <td>Reg. Number:</td>
                <td><?php echo $rows['regnum']; ?></td>
              </tr>
              <tr>
                <td>Assignment ID:</td>
                <td><?php echo $rows['assid']; ?></td>
              </tr>
              

              <tr>
                <td>Grade</td>
                <td><input type="text" name="grade"></td>
              </tr>
             
            
              <tr>
                <td></td>
                <td><button type="submit" class="btn" name="add" ><i class="fa-solid fa-reply"></i> Reply</button></td>
              </tr>

              
          
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

<?php
if(isset($_POST['add'])){
  
  $grade = $_POST['grade'];
  $assid = $rows['assid'];
  

  $edit = "UPDATE review SET grade = '$grade' WHERE regnum = '$regnum' && assid = '$assid'";
  
  if($conn->query($edit) === TRUE){
    echo "<script> alert('Reply successfully registered')</script>";
    header("review.php");
    
    }else{
      echo "<script> alert('Ooops! Problem with replying') </script>";
      
  }
             
}

?>


