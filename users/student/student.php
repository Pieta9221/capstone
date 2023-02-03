<?php 
session_start();
include('../inc/connection.php');
$conn = new mysqli ($host, $user, $pwd, $database);
$email = $_SESSION['email'];
$query  = "SELECT * FROM studentdata WHERE email='$email'";
$result = $conn->query($query);
$row = $result -> fetch_array();

if(empty($row['regnum'])){
  include("access.php");
} elseif($row['status'] == "Suspended"){  
  include("suspend.php");
} else{  

$query2  = "SELECT * FROM studentdata WHERE regnum !=''  ORDER BY fname ASC";
  $result2 = $conn->query($query2);
  if($result2->num_rows == 0){
    echo "Data not found";
  } else{  
  
  ?>  

    <?php 
      include('nav.php');
    ?>
    
    <main>
      <div class="rec">
        <div class="card-header">
          <h2>All Students</h2>
        </div>
            
        <div class="table-responsive">
          <table>
            <thead>
              <tr>
                <td>Passport</td>
                <td>Name</td>
                <td>Reg. No.</td>
                <td>Course</td>
                <td>View</td>
                <td></td>
              </tr>
            </thead>
            
            <tbody>
              <?php
              while($row = $result2 -> fetch_array()){
                echo "<tr>";
                echo "<td>". "<img src = ".'../'.$row['passport']." class = 'pic'/>"."</td>";
                echo "<td>".$row['fname']."</td>";
                echo "<td>".$row['regnum']."</td>";
                echo "<td>".$row['course']."</td>";
                echo "<td>". '<a href="studentprofile.php?id='.$row['id']. '"class="btn"> <i class="fa-solid fa-eye"></i></a>'."</td>";
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
<?php
}
?>