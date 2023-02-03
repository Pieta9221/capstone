<?php 
session_start();
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
          <h2>Search Result</h2>
        </div>
            
        <div class="table-responsive">
          <table>
            <thead>
              <tr>
                <td>Passport</td>
                <td>Name</td>
                <td>View</td>
                <td></td>
              </tr>
            </thead>
            
            <tbody>
              <?php
              $fname = $_POST['fname'];
              $query2 = "SELECT * FROM studentdata WHERE fname LIKE '%$fname%' AND regnum !=''";
              $result2 = $conn->query($query2);
              if($result2->num_rows > 0){
                while($rows = $result2 -> fetch_array()){
                  echo "<tr>";
                  echo "<td>". "<img src = ".'../'.$rows['passport']." class = 'pic'/>"."</td>";
                  echo "<td>".$rows['fname']."</td>";
                  echo "<td>". '<a href="studentprofile.php?id='.$rows['id']. '"class="btn" > <i class="fa-solid fa-eye"></i></a>'."</td>";
                  echo "<td>". "</td>";
                  echo "</tr>";
                  
                } 
              } else{
                echo "<tr>";
                echo "Data Not Found";
                echo "</tr>";
                
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
<?php
