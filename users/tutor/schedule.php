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
          <h2>Events</h2>
        </div>

        <?php
        $today = date("Y-m-d");
        $query2  = "SELECT * FROM schedule WHERE date >= '$today'  ORDER BY date DESC";
        $result2 = $conn->query($query2);
        if($result2->num_rows == 0){
          echo "No upcoming events! ";
        } else{  
        
         ?> 
            
        <div class="table-responsive">
          <table>
            <thead>
              <tr>
                <td>Date</td>
                <td>Event</td>
                <td>Time</td>
                <td>Delete</td>
                <td></td>
              </tr>
            </thead>
            
            <tbody>
              <?php
              while($row = $result2 -> fetch_array()){
             
                echo "<tr>";
                echo "<td>".$row['date']."</td>";
                echo "<td>".$row['event']."</td>";
                echo "<td>".$row['time']."</td>";
                echo "<td>". '<a href="deleteschedule.php?id='.$row['id']. ' "class="btn" onclick="return confirm(`Are you sure want to delete this entry?`)" > <i class="fa-solid fa-trash-can"></i></a>'."</td>";
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

  <script src="../.././js/theme.js"></script>
</body>
</html>