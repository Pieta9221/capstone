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
        <h2>Grades</h2>
      </div>

                  
      <div class="table-responsive">
        <table>
          <thead>
            <tr>
              <td>Date</td>
              <td>ID</td>
              <td>Grade</td>
              <td></td>
            </tr>
          </thead>
          
          <tbody>
          <?php
            if(isset($_GET['regnum'])){
              include('../inc/connection.php');
              $conn = new mysqli ($host, $user, $pwd, $database);
              
                $regnum = $_GET['regnum'];
                
                $query3  = "SELECT * FROM review WHERE regnum = '$regnum' ORDER BY date DESC";
                $result3 = $conn->query($query3);
                if($result3->num_rows == 0){
                echo "Assignment not submitted";
              } else{ 
                while($rows = $result3 -> fetch_array()){
                echo "<tr>";
                echo "<td>".$rows['date']."</td>";
                echo "<td>".$rows['assid']."</td>";
                if($rows['grade'] == 0){
                  echo "<td>".'Not Yet Graded'."</td>";
                }else{
                  echo "<td>".$rows['grade']."</td>";
                }
                echo "<td>". "</td>";
                echo "</tr>";
              }
              }
            }  
          ?>  
            
          </tbody>
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