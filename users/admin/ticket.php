<?php 
session_start();
// include_once("../session.php");
include('../inc/connection.php');
$conn = new mysqli ($host, $user, $pwd, $database);
$email = $_SESSION['email'];
$query  = "SELECT * FROM admindata WHERE email='$email'";
$result = $conn->query($query);
$row = $result -> fetch_array();

if(isset($_GET['ticketid'])){
  $ticketid = $_GET['ticketid'];
  
  $query  = "SELECT * FROM ticket WHERE ticketid = '$ticketid'";
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
            <h2>Ticket Information</h2>
            </div>
        </div>
          <div>
            
            <table>
              <form method="POST">
              <tr>
                <td>Date:</td>
                <td><?php echo $rows['date']; ?></td>
              </tr>
              <tr>
                <td>Name:</td>
                <td><?php echo $rows['fname']; ?></td>
              </tr>
              <tr>
                <td>Email:</td>
                <td><?php echo $rows['email']; ?></td>
              </tr>
              <tr>
                <td>Phone:</td>
                <td><?php echo $rows['phone']; ?></td>
              </tr>
              <tr>
                <td>Ticket ID:</td>
                <td><?php echo $rows['ticketid']; ?></td>
              </tr>
              <tr>
                <td>Subject:</td>
                <td><?php echo $rows['subject']; ?></td>
              </tr>
              <tr>
                <td>Message:</td>
                <td><?php echo $rows['message']; ?></td>
              </tr>
              <tr>
                <td>Status:</td>
                <td><?php echo $rows['status']; ?></td>
              </tr>

              <tr>
                <td>Reply:</td>
                <td><textarea name="reply" rows="5" cols="30"></textarea></td>
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
  $attendedby = $row['fname'];
  $reply = $_POST['reply'];
  $status = "Resolved";

  $edit = "UPDATE ticket SET attendedby = '$attendedby', status = '$status', reply ='$reply' WHERE ticketid = '$ticketid'";
  
  if($conn->query($edit) === TRUE){
    echo "<script> alert('Reply successfully registered')</script>";
    
    }else{
      echo "<script> alert('Ooops! Problem with replying') </script>";
      
  }
             
}

?>


