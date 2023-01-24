<?php 
session_start();
// include_once("../session.php");
include('../inc/connection.php');
$conn = new mysqli ($host, $user, $pwd, $database);
$email = $_SESSION['email'];
$query  = "SELECT * FROM admindata WHERE email='$email'";
$result = $conn->query($query);
$row = $result -> fetch_array();

  
?>

    <?php 
      include('nav.php');
    ?>
    
    <main>
      <div class="rec">
         <div class="card-header">
          <h2>Tickets</h2>
        </div>

        <?php
        $query2  = "SELECT * FROM ticket ORDER BY date";
        $result2 = $conn->query($query2);
        if($result2->num_rows == 0){
          echo "Data not found";
        } else{  
        
         ?> 
            
        <div class="table-responsive">
          <table>
            <thead>
              <tr>
                <td>Name</td>
                <td>Ticket ID</td>
                <td>Email</td>
                <td>Subject</td>
                <td>Message</td>
                <td>Status</td>
                <td>Reply</td>
                <td></td>
              </tr>
            </thead>
            
            <tbody>
              <?php
              while($row = $result2 -> fetch_array()){
                echo "<tr>";
                echo "<td>".$row['fname']."</td>";
                echo "<td>".$row['ticketid']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['subject']."</td>";
                echo "<td>".$row['message']."</td>";
                echo "<td>".$row['status']."</td>";
                echo "<td>". '<a href="../inc/adminprofile.php?id='.$row['id']. '"class="btn" target="_blank"> <i class="fa-solid fa-reply"></i></a>'."</td>";
                echo "<td>". "</td>";
                echo "</tr>";
              }
              }
              ?>  
            </tbody>
          </table>
              
          
        </div>

    </main>
    

    
  
    
  <section class="copyright">
    <p class="copy">&copy; 2022 LM Tech Hub</p>
  </section>
  

</body>
</html>