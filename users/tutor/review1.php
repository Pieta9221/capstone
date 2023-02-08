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

?>

    <?php 
      include('nav.php');
    ?>
    
    <main>
      <div class="rec">
            
         <div class="card-header">
          <h2>Assignment Review</h2>
        </div>

       
        <div class="table-responsive">
          <table>
            <thead>
              <tr>
                <td>Date</td>
                <td>Reg. No.</td>
                <td>View</td>
                <td>Grade</td>
                <td></td>
              </tr>
            </thead>
            
            <tbody>
            <?php
              if(isset($_GET['assid'])){
                                  
              $assid = $_GET['assid'];
              
              $query2  = "SELECT * FROM review WHERE assid = '$assid'";
              $result2 = $conn->query($query2);
              if($result2->num_rows == 0){
                echo "Data not found";
              } else{  
                                  
              while($row = $result2 -> fetch_array()){
                echo "<tr>";
                echo "<td>".$row['date']."</td>";
                echo "<td>".$row['regnum']."</td>";
                echo "<td>". '<a href="../inc/download.php?assignment='.$row['assignment']. '"class="btn"> <i class="fa-solid fa-download"></i></a>'."</td>";
                echo "<td>". '<a href="review2.php?regnum='.$row['regnum']. '"class="btn" > <i class="fa-solid fa-check"></i></a>'."</td>";
                echo "<td>". "</td>";
                echo "</tr>";
              }
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