<?php 
session_start();
// include_once("../session.php");
include ('../inc/connection.php');
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


$query2  = "SELECT * FROM studentdata ORDER BY fname ASC";
  $result2 = $conn->query($query2);
  if($result2->num_rows == 0){
    echo "Data not found";
  } else{  
  
   ?> 
<?php 


  
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
                <td>Admission Status</td>
                <td>View</td>
                <td>Action</td>
                
                
                <td></td>
              </tr>
            </thead>
            
            <tbody>
              <?php
              while($row = $result2 -> fetch_array()){
                echo "<tr>";
                echo "<td>". "<img src = ".'../'.$row['passport']." class = 'pic'/>"."</td>";
                echo "<td>".$row['fname']."</td>";
                echo "<td>".$row['status']."</td>";
                echo "<td>". '<a href="studentprofile.php?id='.$row['id']. '"class="btn" > <i class="fa-solid fa-eye"></i></a>'."</td>";
                if($row['status'] == "Admitted"){
                echo "<td>". '<a href="revoke.php?regnum='.$row['regnum']. '"class="btn" > <i class="fa-solid fa-square-xmark"></i> Suspend</a>'."</td>";
                } elseif($row['status'] == "Pending"){
                  echo "<td>". '<a href="revoke.php?id='.$row['id']. '"class="btn" > <i class="fa-solid fa-square-xmark"></i> Revoke</a>'."</td>";
                  echo "<td>". '<a href="admit.php?id='.$row['id'].'"class="btn"> <i class="fa-solid fa-check"></i> Admit</a>'."</td>";
                } else{
                echo "<td>". '<a href="admit.php?id='.$row['id'].'"class="btn"> <i class="fa-solid fa-check"></i> Admit</a>'."</td>";
                }
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