<?php 
session_start();
// include_once("../session.php");
include('../inc/connection.php');
$conn = new mysqli ($host, $user, $pwd, $database);
$email = $_SESSION['email'];
$query  = "SELECT * FROM studentdata WHERE email='$email'";
$result = $conn->query($query);
$row = $result -> fetch_array();


$ticketid = $_GET['ticketid'];
  
  $query  = "SELECT * FROM ticket WHERE ticketid = '$ticketid'";
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
                <td><?php echo $rows['reply']; ?></td>
              </tr>

              <tr>
                <td>Attended By:</td>
                <td><?php echo $rows['attendedby']; ?></td>
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
