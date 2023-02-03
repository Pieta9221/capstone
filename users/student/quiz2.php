<?php 
session_start();
include('../inc/connection.php');
$conn = new mysqli ($host, $user, $pwd, $database);
$email = $_SESSION['email'];
$query  = "SELECT * FROM studentdata WHERE email='$email'";
$result = $conn->query($query);
$row = $result -> fetch_array();
 ?> 

    <?php 
      include('nav.php');
    ?>
    
    <main>
      <div class="rec">
        <div class="card-header">
          <h2>Admission Status</h2>
        </div>
            
        <div class="table-responsive">
          <table>
            <thead>
              <tr>
                <td>Dear <?php echo $row['fname']; ?></td>
                
              </tr>
            </thead>
            
            <tbody>
              <?php
              echo "<tr>";
              echo "<td>". "You have already taken this quiz "."</td>";
              echo "</tr>";
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